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
   public function show(Request $request)
   {
      $id = (int) $request->id;
      $profile =  Profile::findOrFail($id);
      return view("profile.show", compact("profile"));
   }

   // create
   public function create(){
      return view("profile.create");
   }

   // store
   public function store(Request $request){
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $bio = $request->bio;
     
      // validation
       $request->validate([
         "name"=>"required"
       ]);

      // insertion
      Profile::create([
         "name"=>$name,
         "email"=>$email,
         "password"=>$password,
         "bio"=>$bio
      ]);

      return redirect()->route("profiles.index");
   }
}
