<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

   // index
   public function index()
   {
      $profiles = Profile::paginate(9);
      return view("profile.index", compact("profiles"));
   }

   // show
   public function show(Profile $profile)
   {
      return view("profile.show", compact("profile"));
   }

   // create
   public function create(){
      return view("profile.create");
   }

   // store
   public function store(Request $request){
     
     
      // validation
       $request->validate([
         "name"=>"required",
         "email" =>"required|email|unique:profiles",
         "password"=>"required",
         "bio" => "min:10"
       ]);

      // insertion
      Profile::create($request->post());
      return redirect()->route("profiles.index")->with("success","profile added successfuly");
   }
}
