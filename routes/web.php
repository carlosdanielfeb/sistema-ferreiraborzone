<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

// Tela principal (login)
Route::get('/', [LoginController::class, 'LoginInicial']);

// Login
Route::get('/users/login', [LoginController::class, 'LoginInicial'])->name('login');
Route::post('/users/login', [LoginController::class, 'login'])->name('login.perform');


// Registro
Route::get('/users/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/users/register', [RegisterController::class, 'register']);


// Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


//logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
});
