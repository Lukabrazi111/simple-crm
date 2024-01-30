<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::get('/reset-password', function () {
        return view('reset-password.index');
    })->name('reset-password.index');
});
