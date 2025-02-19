<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// all profiles
Route::get("/profiles", [ProfileController::class, "index"])->name("profiles.index");

// show
Route::get("/profiles/{id}", [ProfileController::class, "show"])
->where("id", "\d+")	
->name("profiles.show");

// home
Route::get("/",[HomeController::class, "index"])->name(("home"));

// create
Route::get("/profiles/create", [ProfileController::class, "create"])->name("profiles.create");

// store
Route::post("/profiles/store", [ProfileController::class, "store"])->name("profiles.store");