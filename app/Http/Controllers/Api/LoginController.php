<?php

namespace App\Http\Controllers\Api;

use Exception;
use Throwable;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Routing\Exceptions\UrlGenerationException;

class LoginController extends Controller
{

 public function register(Request $request)
 {
  

   $validator = Validator::make($request->all(), [

     "retailer_name" => "required|max:55",
     "shop_name" => "required|max:55",
     "address" => "required",
     "phone1" => "required",
     "email" => "email|required|unique:users",
     "password" => "required|confirmed",

      ]);

      if ($validator->fails()) {
          $data=[
            "user" => null,
            "access_token" => null,
            "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
            "response_code" => 403,
        ];
          return response()->json($data,243);
      }


   $validated = $validator->safe()->except(['shop_name']);
  

   $validated["retailer_name"] = Str::lower($validated["retailer_name"] );
   $validated["password"] = bcrypt($request->password);
   $output = new ConsoleOutput();
   $output->writeln('ch debug validated after hash');
   $output->writeln($validated);

   $user = User::create($validated);
  //  $shop= User::create($validator['shop_name']);

  if (!is_null($user)) {
            
    Auth::login($user);
    Cache::put('user', Auth::user() );

    $token=Str::random(30);  
    $expiresAt = Carbon::now()->addMinutes(5);
    Cache::put('verif_link_token', $token, $expiresAt);
    $lang=Cache::get('language');

    $data_mail_verify=[
        'first_name' => Auth::user()->first_name,
        'recipient' => Auth::user()->email,
        'subject' => 'Activation account link',
        'content' => 'please click link below to activate your account',
        'token' => $token,
        'url' => config('app.url').$lang.'/verification-callback?token='.$token,
        'language' => $request->language,
    ];
   

    MailController::verifyAccount($data_mail_verify);
}

   
   
   $accessToken = $user->createToken("authToken")->accessToken;

   $data = [
     "user" => $user,
     "access_token" => $accessToken,
   ];
       return response()->json($data,200);

 }
 

 public function login(Request $request)
 {


      $validator = Validator::make($request->all(), [
        'email' => 'email|required|max:255',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {

        $data=[
          "user" => null,
          "access_token" => null,
          "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
          "response_code" => 403,
      ];
        return response()->json($data,243);
    }

    $validated = $validator->safe()->only(['email', 'password']);

    
   if (!auth()->attempt($validated)) {
     $data = [ "error" => 'not authentified',   "response_code" => 403, ];
         return response()->json($data,200);
   }

   $accessToken = auth()->user()->createToken("authToken")->accessToken;
   Cache::put('user', auth()->user());

      $data = [
        "user" => auth()->user(),
        "access_token" => $accessToken,
      ];
          return response()->json($data,200);

 }


 public function logout(Request $request)
 {
  $output = new ConsoleOutput();
  $output->writeln('ch debug logout');
  
  $output->writeln($request->all());
  $output->writeln(Auth::check());
  $output->writeln(auth()->user());

  Cache::forget('user', auth()->user());

   if (Auth::check()) {
     $logoutStatus = Auth::user()->token()->revoke();

     $data = [
       "backend_response" => 'logout successfuly',
       "response_code" => 200,
       ];
         return response()->json($data,200);
   }else{
    $data = [
      "backend_response" => 'non authentified',
      "response_code" => 403,
      ];
        return response()->json($data,200);
   }

}
 public function users(Request $request)
 {


    // $users=User::get();
    try{
      $users=User::get();
    }catch(\Exception $e){
       return $e->getMessage();

    }

    $data = [
      "users" => $users,
    
    ];

    return response()->json($data,200);
   

}
}