<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   // show
    public function show(){
     return view("login.show");
    }

    // login
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

    public function logout(){
      Session::flush();
      Auth::logout();
      return to_route("login.show")->with("success", "logout successfully");
    }
}

