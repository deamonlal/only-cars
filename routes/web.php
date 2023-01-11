<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;

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

Auth::routes();
Route::middleware(['auth'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('validator', [HomeController::class, 'validator'])->name('validator');
    Route::get('cars', [CarController::class, 'index'])->name('cars');
    Route::get('reserve', [CarController::class, 'reserve'])->name('reserve');
});


