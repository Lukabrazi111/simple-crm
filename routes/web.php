<?php

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


Route::get('/login', function () {
    return view('login.index');
})->name('login.index');

Route::get('/reset-password', function () {
    return view('reset-password.index');
})->name('reset-password.index');

// Authorized user's route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users', function () {
    return view('users.index');
})->name('users');

Route::get('/users/create', function () {
    return view('users.create');
})->name('users.create');

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

Route::get('/notifications', function () {
    return view('notifications.index');
})->name('notifications');
