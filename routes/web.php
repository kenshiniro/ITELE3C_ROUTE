<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/user', function () {
    return dd('hello user');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/upgrade', function () {
    return view('upgrade');
})->name('upgrade');

Route::get('user/{name}', function ($name) {
    return dd('Hello'. $name);
});

Route::get('user/{name}', function ($name) {
    return dd('Hello'. $name);
});

Route::get('user/asdasda/sadasd/asfass', function () {
    return dd('user');
})->name('user');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('manage-cart', function () {
        return view('manage-cart');
    })->name('manage-cart');
    Route::get('generate', function () {
        return view('generate');
    })->name('generate');
});

