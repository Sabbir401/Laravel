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

Route::group(['prefix'=>'/customer'], function () {
    Route::get('/register', [RegistrationController::class, 'index']);
    Route::post('/register', [RegistrationController::class, 'register']);
    Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('/view', [CustomerController::class, 'view']);
    Route::post('', [CustomerController::class, 'store']);
    Route::get('/trash', [CustomerController::class, 'trash']);
    Route::get('/', [DemoController::class, 'index']);
    Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('/force-delete/{id}', [CustomerController::class, 'forcedelete'])->name('customer.force-delete');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
});

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

Route::post('/upload', [DemoController::class, 'upload']);

Route::get('/lan', function () {
    return view('lan');
});

Route::get('/data', [DemoController::class, 'data']);
