<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestController;

Route::get('/', function () {
    return view('welcome');
});

// User routes
Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'register']);
Route::put('/user/update', [UserController::class, 'update']);
Route::post('/user/show/{id}', [UserController::class, 'show']);

// Quest routes
Route::post('/quest/create', [QuestController::class, 'create']);
Route::put('/quest/update', [QuestController::class, 'update']);
Route::patch('/quest/check/{id}', [QuestController::class, 'check']);
Route::get('quest/show/{id}', [QuestController::class, 'show']);
