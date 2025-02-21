<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

   // index----------------------------------------------------------------------------------------------
   public function index()
   {
      $profiles = Profile::paginate(9);
      return view("profile.index", compact("profiles"));
   }

   // show-----------------------------------------------------------------------------------------------
   public function show(Profile $profile)
   {
      return view("profile.show", compact("profile"));
   }

   // create---------------------------------------------------------------------------------------------
   public function create()
   {
      return view("profile.create");
   }

   // store-----------------------------------------------------------------------------------------------
   public function store(Request $request)
   {

      // validation
      $formField = $request->validate([
         "name" => "required",
         "email" => "required|email|unique:profiles",
         "password" => "required|confirmed",
         "bio" => "min:10"
      ]);

      // crypt password
      $password = $request->password;
      $formField["password"] = Hash::make($password);

      // insertion
      Profile::create($formField);
      return redirect()->route("profiles.index")->with("success", "profile added successfuly");
   }


   //delete ---------------------------------------------------------------------------------------------
   public function destroy(Profile $profile)
   {
      $profile->delete();
      return to_route("profiles.index")->with("success", "profile deleted successfuly");
   }

   // edit-----------------------------------------------------------------------------------------------
   public function edit(Profile $profile)
   {
      return view("profile.edit", compact("profile"));
   }

   public function update(Request $request, Profile $profile)
   {
      // validation
      $formField = $request->validate([
         "name" => "required",
         "email" => "required|email|unique:profiles",
         "password" => "required|confirmed",
         "bio" => "min:10"
      ]);

      $profile->fill($formField)->save();
      return to_route("profiles.show", $profile->id)->with("success", "profiles added successfully");
   }
}
