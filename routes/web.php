<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/places', function () {
    return view('places');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'adminHome'])->middleware('is_admin');
Route::get('/dashboard/edit/{payment}', [HomeController::class, 'user'])->middleware('is_admin');
Route::get('/dashboard/delete/{payment}', [HomeController::class, 'destroy'])->middleware('is_admin');
Route::get('/dashboard/invoice/pdf/{payment}', [HomeController::class, 'invoice'])->middleware('is_admin');
Route::post('/updatepayment/{payment}', [HomeController::class, 'update'])->middleware('is_admin');

Route::post('/storePembayaran', [HomeController::class, 'pembayaran']);


