<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
   public function index()
   {
      $profiles = Profile::paginate(10);
      return view("profiles", compact("profiles"));
   }

   public function show(Request $request){
      dd($request->id);
      return "show";
   }
}
