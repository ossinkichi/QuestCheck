<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('home');
});

Route::get('/settings', function () {
    return view('home');
});
