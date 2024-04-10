<?php

use App\Http\Controllers\entryController;
use App\Http\Controllers\exitController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::post("/home", [entryController::class, "entry"])->name("create");

Route::get("/home", [exitController::class, "exit"])->name("exit");