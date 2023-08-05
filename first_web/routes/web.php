<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;
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

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/trash', [CustomerController::class, 'trash']);
Route::get('/', [DemoController::class, 'index']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}', [CustomerController::class, 'forcedelete'])->name('customer.force-delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Sabbir Ahmed');
    $request->session()->put('user_id', '123');
    return redirect('get-all-session');
});

Route::get('destroy-session', function () {
    session()->forget(['name', 'user_id']);
    // session()->forget('user_id');
    return redirect('get-all-session');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [DemoController::class, 'upload'] );
