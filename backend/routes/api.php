<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestController;

// User routes
Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'register']);
Route::put('/user/update', [UserController::class, 'update']);
Route::get('/user/show/{id}', [UserController::class, 'show']);

// Quest routes
Route::get('/quest/{id}', [QuestController::class, 'index']);
Route::post('/quest/create', [QuestController::class, 'create']);
Route::put('/quest/update', [QuestController::class, 'update']);
Route::get('/quest/show/{user}/{quest}', [QuestController::class, 'show']);
Route::patch('/quest/check/{user}/{quest}', [QuestController::class, 'check']);
Route::patch('/quest/failed/{user}/{quest}', [QuestController::class, 'fail']);
