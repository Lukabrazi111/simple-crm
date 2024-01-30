<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    require __DIR__ . '/auth.php';
});

// Authorized user's route
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    require __DIR__ . '/user.php';

    require __DIR__ . '/client.php';

    require __DIR__ . '/project.php';

    require __DIR__ . '/task.php';


    Route::get('/notifications', function () {
        return view('notifications.index');
    })->name('notifications');

    Route::get('/sanctum-api-token', function () {
        return auth()->user()->tokens()->first()->token;
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

