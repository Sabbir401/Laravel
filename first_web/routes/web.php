<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
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



// Route::get('/', [DemoController:: class, 'index']);

// Route::get('/about', 'App\Http\Controllers\DemoController@about');

// Route::get('/about', SingleActionController:: class);

// Route::resource('photo', PhotoController:: class);

Route::get('/register', [RegistrationController:: class, 'index']);

Route::post('/register', [RegistrationController:: class, 'register']);
