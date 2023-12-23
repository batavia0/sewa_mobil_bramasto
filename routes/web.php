<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [RentalController::class, 'index'])->name('dashboard');  
    Route::get('sewa-mobil', [RentalController::class, 'indexRentCar'])->name('sewa-mobil.index');  
    Route::get('mobil', [CarController::class, 'index'])->name('mobil.index');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
