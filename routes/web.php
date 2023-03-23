<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

//トップページ
Route::get('/', [ContactController::class, 'index'])->name('index');
//確認ページ
Route::get('/confirm', [CotactController::class, 'confirm']);
Route::post('/confirm', [CotactController::class, 'confirm'])->name('confirm');