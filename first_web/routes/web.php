<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
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

Route::get('/customer/create', [CustomerController::class, 'index'])->name('customer.create');

Route::get('/customer/view', [CustomerController::class, 'view']);

Route::post('/customer', [CustomerController::class, 'store']);

Route::get('/', [DemoController:: class, 'index']);

Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');

Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
