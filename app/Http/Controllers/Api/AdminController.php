<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Exception;
use Throwable;
use App\Models\Shop;
use App\Models\User;
use App\Jobs\VerifyMailJob;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Routing\Exceptions\UrlGenerationException;


class AdminController extends Controller
{
    public function adminLogin(Request $request){

       
        // $data=[

        //     'request'=> $request->cred,
        // ];

        // return response()->json($data,200);


        // $output = new ConsoleOutput();
        // $output->writeln('adminLogin');
        // $output->writeln($request->cred['email']);
    
    
          $validator = Validator::make($request->cred, [
            'email' => 'email|required|max:255',
            'password' => 'required|min:8',
        ]);
    
        if ($validator->fails()) {
            
            $data=[
              "user" => null,
              "access_token" => null,
              "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
              "response_code" => 403,
              "isAuthenticated" => false,
              "role" => false,
          ];
            return response()->json($data,243);
        }
    
        $validated = $validator->safe()->only(['email', 'password']);
    
    //   $data=[

    //         'validated '=> $validated ,
    //     ];

    //     return response()->json($data,200);
        
       if (!auth()->attempt($validated)) {
    
         $data = [ 
         "user" => null,
         "access_token" => null,
         "backend_response" => 'user not found, error in password or email ',
         "response_code" => 403,
         "isAuthenticated" => false,
         "role" => false,
         ];
             return response()->json($data,200);
       }
    
       $accessToken = auth()->user()->createToken("admin-authToken")->accessToken;
       
    
          $data = [
            "user" => auth()->user(),
            "access_token" => $accessToken,
            "response_code" => 200,
            "backend_response" => 'user connected with success ',
            "isAuthenticated" => true,
            "role" => auth()->user()->role,
    
          ];
          
              return response()->json($data,200);

    }

    

    public function adminLogout(Request $request){

        if (Auth::check()) {
            $logoutStatus = Auth::user()->token()->revoke();
          }

           $data = [
                "user" => '',
                "access_token" => '',
                "response_code" => 200,
                "backend_response" => 'user disconnected with success ',
                "isAuthenticated" => false,
                "role" => '',
             ];
               return response()->json($data,200);
          

    }
}
