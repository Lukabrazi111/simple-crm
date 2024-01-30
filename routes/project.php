<?php

use Illuminate\Support\Facades\Route;

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects');

Route::get('/projects/create', function () {
    return view('projects.create');
})->name('projects.create');
