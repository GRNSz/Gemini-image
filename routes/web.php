<?php

use Illuminate\Support\Facades\Route;


Route::get("/", "App\Http\Controllers\GeminiImageController@create")->name("gemini-image.create");
Route::post("/gemini-image", "App\Http\Controllers\GeminiImageController@store")->name("gemini-image.store");

// Route::get('/', function () {
//     return view('welcome');
// });
