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
}
