<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForestAreaController;
use App\Http\Controllers\produksiController;
use App\Http\Controllers\DynamicTableController;

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [ForestAreaController::class, 'index'])->name('home')->middleware('auth');

Route::get('produksi', [produksiController::class, 'index'])->name('produksi')->middleware('auth');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/table/{tableName}', [DynamicTableController::class, 'showTable'])->name('/table/{tableName}')->middleware('auth');
