<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get("/profiles", [ProfileController::class, "index"])->name("profiles.index");
Route::get("/",[HomeController::class, "index"])->name(("home"));