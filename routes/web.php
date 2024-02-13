<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

    // Reset password
    Route::get('/reset-password', [ResetPasswordController::class, 'create'])->name('send-reset-password.create');
    Route::post('/reset-password', [ResetPasswordController::class, 'sendResetPassword'])->name('send-reset-password');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPasswordCreate'])->name('reset-password.create');
    Route::post('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('reset-password');
});

// Authorized user's route
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Users controller
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users');

        Route::get('/users/create', 'create')->name('users.create');
        Route::post('/users/create', 'store')->name('users.store');

        Route::get('/users/update/{user}', 'edit')->name('users.edit');
        Route::post('/users/update/{user}', 'update')->name('users.update');
    });

    // Clients controller
    Route::get('/clients', function () {
        return view('clients.index');
    })->name('clients');

    Route::get('/clients/create', function () {
        return view('clients.create');
    })->name('clients.create');

    Route::get('/projects', function () {
        return view('projects.index');
    })->name('projects');

    Route::get('/projects/create', function () {
        return view('projects.create');
    })->name('projects.create');

    Route::get('/tasks', function () {
        return view('tasks.index');
    })->name('tasks');

    Route::get('/tasks/create', function () {
        return view('tasks.create');
    })->name('tasks.create');

    Route::get('/notifications', function () {
        return view('notifications.index');
    })->name('notifications');

    Route::get('/sanctum-api-token', function () {
        return auth()->user()->tokens()->first()->token;
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

