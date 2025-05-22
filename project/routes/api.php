<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestController;

// User routes
Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'register']);
Route::put('/user/update', [UserController::class, 'update']);
Route::post('/user/show/{id}', [UserController::class, 'show']);

// Quest routes
Route::get('/quests/{id}', [QuestController::class, 'index']);
Route::post('/quest/create', [QuestController::class, 'create']);
Route::put('/quest/update', [QuestController::class, 'update']);
Route::get('quest/show/{id}', [QuestController::class, 'show']);
Route::put('/quest/check/{id}', [QuestController::class, 'check']);
