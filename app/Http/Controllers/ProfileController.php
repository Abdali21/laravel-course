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
         "bio" => "min:10",
         "image" => "image  |mimes:jpeg,png,jpg,svg |max: 3000"
      ]);

      // store image
      if($request->hasFile("image")){
         $fileName = $request->file("image")->store("profile", "public");
         $formField["image"] = $fileName;
      }

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

   // update
   public function update(Request $request, Profile $profile)
   {
      // validation
      $formField = $request->validate([
         "name" => "required",
         "email" => "required|email",
         "password" => "required|confirmed",
         "bio" => "min:10",
         "image" => "image  | mimes:jpeg,png,jpg,svg |max: 3000"
      ]);

      // store image
      if($request->hasFile("image")){
         $fileName = $request->file("image")->store("profile", "public");
         $formField["image"] = $fileName;
      }

      // crypt password
      $password = $request->password;
      $formField["password"] = Hash::make($password);

      // fill 
      $profile->fill($formField)->save();
      return to_route("profiles.show", $profile->id)->with("success", "profiles added successfully");
   }
}
