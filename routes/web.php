<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::prefix('auth')->as('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->as('admin.')->middleware('check-admin')->group(
    function () {

        Route::get('/', function () {
            return view('admin.layouts.main');
        })->name('dashboard');
    }
);
