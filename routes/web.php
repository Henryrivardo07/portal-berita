<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('processRegister');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');
