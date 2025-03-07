<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::resource('jobs', JobController::class);
Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
Route::resource('jobs', JobController::class)->except(['create', 'edit', 'update', 'destroy']);

// Middleware protected routes
Route::middleware('guest')->group(function () {
    // Register routes
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


    // Login routes
    Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

// Jobs routes
Route::resource('jobs', JobController::class);

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Profile route
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
