<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.submit');

    Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup');
    Route::post('/signup', [RegisteredUserController::class, 'store'])->name('signup.submit');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'store'])->name('login.submit');

    Route::get('/', [AdminController::class, 'index'])
        ->middleware('auth:admin')
        ->name('dashboard');

    Route::post('/logout', [AdminAuthController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');
});
