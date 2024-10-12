<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('processRegister');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/table', function () {
    return view('table');
});

Route::resource('category', CategoryController::class);

Route::get('/data-tables', function () {
    return view('data-tables');
});
