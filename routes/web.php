<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Halaman Autentikasi
Route::get('/login', [PagesController::class, 'loginPage'])->name('login')->middleware('guest');

// Autentikasi Actions
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Sistem
Route::get('/', [PagesController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
Route::get('/money-storage', [PagesController::class, 'moneyStoragePage'])->name('money-storage')->middleware('auth');
