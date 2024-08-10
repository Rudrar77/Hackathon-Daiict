<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipmentController;
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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth.custom');

Route::post('/', [AuthController::class, 'handleForm'])->name('handleForm');

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth.custom');

Route::get('/renter', function () {
    return view('renter.rentform');
})->middleware('auth.custom');

Route::get('/buyer', [AuthController::class, 'buy_get'])->name('contact.buy_get')->middleware('auth.custom');

Route::get('/otpver', function () {
    return view('otpver');
})->middleware('auth.custom');

Route::get('/about-us', function () {
    return view('about');
})->middleware('auth.custom');

Route::get('/contact-us', [ContactController::class, 'create'])->name('contact.create')->middleware('auth.custom');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store')->middleware('auth.custom');


Route::post('/rentform', [EquipmentController::class, 'store'])->name('equipment.store');
Route::post('/rentform', [EquipmentController::class, 'store'])->name('equipment.store');
