<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestController;

Route::get('/', function () {
    return view('welcome');
});
