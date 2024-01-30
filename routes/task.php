<?php

use Illuminate\Support\Facades\Route;

Route::get('/tasks', function () {
    return view('tasks.index');
})->name('tasks');

Route::get('/tasks/create', function () {
    return view('tasks.create');
})->name('tasks.create');
