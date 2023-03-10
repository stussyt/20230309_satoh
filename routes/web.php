<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

Route::get('/', [TodolistController::class, 'index']);
Route::post('/todos/create', [TodolistController::class, 'store']);
Route::post('/todos/update', [TodolistController::class, 'update']);
Route::post('/todos/delete', [TodolistController::class, 'delete']);