<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/listings');
});

// resource routes for Listings
Route::resource('listings', 
    \App\Http\Controllers\ListingController::class);

// resource routes for Makes
Route::resource('makes', 
    \App\Http\Controllers\MakeController::class);

// resource routes for Models
Route::resource('models', 
    \App\Http\Controllers\ModelController::class);

// resource routes for Users
Route::resource('users', 
    \App\Http\Controllers\UserController::class);

