<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// all profiles --------------------------------------------------------------------------------------------------------------------
Route::get("/profiles", [ProfileController::class, "index"])->name("profiles.index");


// insertion-------------------------------------------------------------------------------------------------------------------------------
Route::get("/profiles/create", [ProfileController::class, "create"])->name("profiles.create");
Route::post("/profiles", [ProfileController::class, "store"])->name("profiles.store");

// delete-----------------------------------------------------------------------------------------------------------------------------------
Route::delete("/profiles/{profile}", [ProfileController::class, "destroy"])->name("profiles.destroy");

// update-----------------------------------------------------------------------------------------------------------------------------------
Route::get("/profiles/{profile}/edit", [ProfileController::class, "edit"])->name("profiles.edit");
Route::put("/profiles/{profile}", [ProfileController::class, "update"])->name("profiles.update"); 

// show------------------------------------------------------------------------------------------------------------------------------------
Route::get("/profiles/{profile}", [ProfileController::class, "show"])
->where("profile", "\d+")	
->name("profiles.show");


// login side -----------------------------------------------------------------------------------------------------------------------
Route::get("/login", [LoginController::class, "show"])->name("login.show");
Route::post("/login", [LoginController::class, "login"])->name("login.login");
Route::get("/logout",[LoginController::class, "logout"])->name("login.logout");


// home -----------------------------------------------------------------------------------------------------------------------------------
Route::get("/",[HomeController::class, "index"])->name(("home"));