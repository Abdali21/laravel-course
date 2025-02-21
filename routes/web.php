<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// all profiles --------------------------------------------------------------------------------------------------------------------
Route::get("/profiles", [ProfileController::class, "index"])->name("profiles.index");

// login side -----------------------------------------------------------------------------------------------------------------------
Route::get("/login", [LoginController::class, "show"])->name("login.show");
Route::post("/login", [LoginController::class, "login"])->name("login.login");
Route::get("/logout",[LoginController::class, "logout"])->name("login.logout");


// home -----------------------------------------------------------------------------------------------------------------------------
Route::get("/",[HomeController::class, "index"])->name(("home"));

// insertion---------------------------------------------------------------------------------------------------------------------------
// create
Route::get("/profiles/create", [ProfileController::class, "create"])->name("profiles.create");
// store 
Route::post("/profiles/store", [ProfileController::class, "store"])->name("profiles.store");

// show-------------------------------------------------------------------------------------------------------------------
Route::get("/profiles/{profile}", [ProfileController::class, "show"])
->where("profile", "\d+")	
->name("profiles.show");