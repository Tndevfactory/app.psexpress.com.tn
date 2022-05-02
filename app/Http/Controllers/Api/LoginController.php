<?php

namespace App\Http\Controllers\Api;

use Exception;
use Throwable;
use App\Models\Shop;
use App\Models\User;
use App\Jobs\VerifyMailJob;
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
     "fr_shop_name" => "required|max:55|unique:shops",
     "address" => "required",
     "phone1" => "required",
     "email" => "email|required|unique:users",
     "password" => "required",

      ]);

      if ($validator->fails()) {
        Cache::forget('user');
        Cache::forget('Bearer_token');
        Cache::forget('language');

          $data=[
            "user" => null,
            "access_token" => null,
            "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
            "response_code" => 403,
            "auth_check" => false,
            "verif_token_pk" => null,
        ];
          return response()->json($data,243); 
      }

      $validated = $validator->safe()->except(['shop_name']);
      
      $validated["retailer_name"] = Str::lower($validated["retailer_name"] );
      $validated["password"] = bcrypt($request->password);

      $user = User::create($validated);

      $shop= Shop::create([
        'fr_shop_name' => $validated['fr_shop_name'],
        'en_shop_name' => $validated['fr_shop_name'],
        'ar_shop_name' => $validated['fr_shop_name'],
        'shop_address' => $validated['address'],
        'shop_phone1' => $validated['phone1'],
        'user_id' => $user->id ,
      
      ]);

    if(!is_null($user)) {
              
      Auth::login($user);
      $user_auth_expires_At = Carbon::now()->addMinutes(300);
      Cache::put('user', Auth::user(),   $user_auth_expires_At );

      $token = Str::random(30);  
      $expiresAt = Carbon::now()->addMinutes(10);

      Cache::put('verif_token_pk', $token, $expiresAt);
      $lang=$request->lang ?? 'fr';

      $data_mail=[
          'welcome' => 'Bonjour,',
          'first_name' => Auth::user()->retailer_name,
          'content' => 'please click link below to activate your account',
          'regards' => 'Cordialement,',
          
          'recipient' => Auth::user()->email,
          'subject' => 'Activation account link',
          'token' => $token,
          'url' => config('app.url').$lang.'/verify?verifyToken='.$token,
          'language' => $request->language,
          'verif_token_pk' => $token,
        ];
      
     dispatch(new VerifyMailJob($data_mail));
  }
    $accessToken = $user->createToken("authToken")->accessToken;

    $data = [
      "user" => $user,
      "access_token" => $accessToken,
      "response_code" => 200,
      "backend_response" => 'user subscribded with success ',
      "auth_check" => true,
      'verif_token_pk' => $token,
    ];
        return response()->json($data,200);

 }
 

 public function login(Request $request)
 {

  // $output = new ConsoleOutput();
  //   $output->writeln('lang');
  //   $output->writeln($request->lang);

    $lang=$request->lang;



      $validator = Validator::make($request->all(), [
        'email' => 'email|required|max:255',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {
      Cache::forget('user');
      Cache::forget('Bearer_token');
      Cache::forget('language');
      

        $data=[
          "user" => null,
          "access_token" => null,
          "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
          "response_code" => 403,
          "auth_check" => false,
      ];
        return response()->json($data,243);
    }

    $validated = $validator->safe()->only(['email', 'password']);

  
    
   if (!auth()->attempt($validated)) {

     $data = [ 
     "user" => null,
     "access_token" => null,
     "backend_response" => 'error in password or email ',
     "response_code" => 403,
     "auth_check" => false,
     ];
         return response()->json($data,200);
   }

   $accessToken = auth()->user()->createToken("authToken")->accessToken;
   Cache::put('user', auth()->user(), 36000);
   Cache::put('Bearer_token', $accessToken, 36000 );
   Cache::put('language', $lang , 36000);


      $data = [
        "user" => auth()->user(),
        "access_token" => $accessToken,
        "response_code" => 200,
        "backend_response" => 'user connected with success ',
        "auth_check" => true,

      ];
      
          return response()->json($data,200);

 }


 public function logout(Request $request)
 {
 
   
  // if(Auth::check()){

  //   $logoutStatus = Auth::user()->token()->revoke();
    

  // }
 

  
    Cache::forget('user');
    Cache::forget('Bearer_token');
    Cache::forget('language');

     $data = [
       "backend_response" => 'logout successfuly',
       "user" => null,
       "access_token" => null,
       "verifTokenPk" => null,
       "auth_check" => false,
       "response_code" => 200,
       ];
         return response()->json($data,200);
  

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

 public function verify(Request $request)
 {

     return view('verify');

}

 public function updateVerifyAt(Request $request)
 {

      $user=cache()->get('user');

      $verif_token_pk=cache()->get('verif_token_pk');

    
    if($request->tk !== $verif_token_pk){
      $data = [
        "backend_response" => 'token a expire, ou ne correspond pas ',
        "response_code" => 403,
        "requestverifToken" => $request->token,
        "verif_token_pk" => $verif_token_pk,
        
        ];
      return response()->json($data,200);
    }


      if(!$user){
        Cache::forget('user');
        Cache::forget('Bearer_token');
        Cache::forget('language');

        $data = [
          "backend_response" => 'no user found ',
          "response_code" => 403,
          
          ];
        return response()->json($data,200);
      }

      $res=$user->update(['email_verified_at'=> Carbon::now()]);
     

      $user_auth_expires_At = Carbon::now()->addMinutes(400);
      Cache::put('user', $user,   $user_auth_expires_At );

      $data = [
        "backend_response" => 'field verified-at updated ',
        "response_code" => 200,
        "requestverifToken" => $request->token,
        "verif_token_pk" => $verif_token_pk,
        
        ];
      return response()->json($data,200);

  }

  
 public function resendToken(Request $request)

 {


     
  $token=Str::random(30);  
  $expiresAt = Carbon::now()->addMinutes(10);

  Cache::put('verif_token_pk', $token, $expiresAt);
  $lang=Cache::get('language') ?? 'fr';

  $data_mail=[
      'welcome' => 'Bonjour,',
      'first_name' => cache()->get('user')->retailer_name,
      'recipient' => cache()->get('user')->email,
      'subject' => 'Activation account link',
      'content' => 'please click link below to activate your account',
      'regards' => 'Cordialement,',
      
      'token' => $token,
      'url' => config('app.url').$lang.'/verify?verifyToken='.$token,
      'language' => $request->language,
      'verif_token_pk' => $token,
  ];
  
  // MailController::verifyAccount($data_mail_verify);
  dispatch(new VerifyMailJob($data_mail));


  $data = [
    
    "response_code" => 200,
    "backend_response" => 'verif_token_pk resent with success ',
    'verif_token_pk' => $token,
  ];
      return response()->json($data,200);

}



public function resetPassword(Request $request)
 {

     return view('reset-password');

}


public function sendPasswordResetPassword(Request $request)

{

 

   $email = $request->email;
   $lang = $request->lang;

   $user= User::where('email', $email)->first();

   
   if(!$user){

     $data = [
     
      "response_code" => 403,
      "backend_response" => 'user not found',
      'verif_token_pk' => null,
     ];
        return response()->json($data,200);
   }
   $expiresAt = Carbon::now()->addMinutes(300);
   Cache::put('user', $user, $expiresAt);
     
    $token=Str::random(30);  
    $expiresAt = Carbon::now()->addMinutes(10);
    Cache::put('reset_token_pk', $token, $expiresAt);
    $lang=Cache::get('language') ?? 'fr';

 $data_mail=[
     
     'welcome' => 'Bonjour,',
     'first_name' => $user->retailer_name,
     'content' => 'please click link below to reset your password',
     'regards' => 'Cordialement,',
     
     'recipient' => $user->email,
     'subject' => 'Reset account link',
     'token' => $token,
     'url' => config('app.url').$lang.'/reset-password-api?verifyToken='.$token,
     'language' => $request->lang,
     'verif_token_pk' => $token,
 ];


 // MailController::verifyAccount($data_mail_verify);
 dispatch(new VerifyMailJob($data_mail));


 $data = [
   
   "response_code" => 200,
   "backend_response" => 'reset_token_pk sent with success ',
   'verif_token_pk' => $token,
 ];
     return response()->json($data,200);

}


public function updatePassword(Request $request)
{

  

     $reset_token_pk=cache()->get('reset_token_pk');

    if($request->ResetVerifyToken !== $reset_token_pk ){

       Cache::forget('user');
       Cache::forget('Bearer_token');
       Cache::forget('reset_token_pk');

      $data = [
        "backend_response" => 'token a expire, ou ne correspond pas ',
        "response_code" => 403,
        
        ];
      return response()->json($data,200);
    }

   //hash

   $user= cache()->get('user');

   
   if(!$user){

     $data = [
     
      "response_code" => 403,
      "backend_response" => 'user not found',
      'verif_token_pk' => null,
     ];
        return response()->json($data,200);
   }

    $password = bcrypt($request->password);


     $res=$user->update(['password'=> $password ]);
   

     $data = [
       "backend_response" => 'password updated please login ',
       "response_code" => 200,
       
       ];
     return response()->json($data,200);

 }


}