<?php

use App\Http\Controllers\entryController;
use App\Http\Controllers\exitController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});


Route::post("/home", [entryController::class, "entry"])->name("home");

Route::post("/home", [exitController::class, "exit"])->name("home");