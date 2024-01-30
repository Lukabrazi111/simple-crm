<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/reset-password', function () {
    return view('reset-password.index');
})->name('reset-password.index');
