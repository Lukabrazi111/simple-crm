<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

    Route::get('/reset-password', function () {
        return view('reset-password.index');
    })->name('reset-password.index');
});

// Authorized user's route
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::get('/users/create', 'create')->name('users.create');
    });

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

