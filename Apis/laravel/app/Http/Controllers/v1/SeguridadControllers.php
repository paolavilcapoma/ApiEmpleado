<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SeguridadController extends Controller
{

    function login(Request $request)
    {
        return"WSS";
    //     $response=new \stdClass();
    //     $response_code=0;

    //     $email=$request->email;
    //     $password=$request->password;

    //     $user=User::where("email","=",$request->email)
    //     ->where("password","=", $password)
    //     ->first();

    //    if($user)
    //    {
    //     $toke= $user->createToken('Laravel Password Grant Client')->accessToken;
    //     $response->success=true;
    //     $response_code=200;
        
    //     $response->data=new \stdClass();
    //     $response->data->token=$toke;
    //    }

    //    else{
    //     $response->success=false;
    //     $response_code=404;
    //     $response->errors=[];
    //     $response->errors[]="El usuario y/o contraseñas son incorrectas";
    //    }
    //    return response()->json($response,$response_code);
    }  
}