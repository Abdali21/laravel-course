<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// profile side ---------------------------------------------------------------------------------------------------------------------------
Route::resource("profiles", ProfileController::class);

// login side -----------------------------------------------------------------------------------------------------------------------------
Route::get("/login", [LoginController::class, "show"])->name("login.show");
Route::post("/login", [LoginController::class, "login"])->name("login.login");
Route::get("/logout", [LoginController::class, "logout"])->name("login.logout");

// home -----------------------------------------------------------------------------------------------------------------------------------
Route::get("/", [HomeController::class, "index"])->name(("home"));
