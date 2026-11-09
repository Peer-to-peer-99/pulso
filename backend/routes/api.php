<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProgressController;
use App\Http\Controllers\Api\Auth\LoginController;
Route::prefix('auth')->group(function () {
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/user', [LoginController::class, 'me'])->name('user');
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/measurements', [ProgressController::class, 'index'])->name('measurements');
});
