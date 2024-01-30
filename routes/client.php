<?php

use Illuminate\Support\Facades\Route;

Route::get('/clients', function () {
    return view('clients.index');
})->name('clients');

Route::get('/clients/create', function () {
    return view('clients.create');
})->name('clients.create');
