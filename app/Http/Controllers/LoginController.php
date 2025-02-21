<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
     return view("login.show");
    }
    public function login(Request $request){
         $login = $request->login;
         $password = $request->password;

         $credentials = [
            "email" => $login,
            "password" => $password
         ];

         if(Auth::attempt($credentials)){
            // connection successfully
              $request->session()->regenerate();
              return to_route("profiles.index")->with("success" ,"login successfully " .$login. "");
            
         }else{
            // connection failed
            return back()->withErrors([
                "login" => "email or password incorrect"
            ])->onlyInput("email");

         }
    }
}

