<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\NewsController;

// Public routes — login is rate-limited to 5 attempts per minute per IP
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');

Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/{id}', [DestinationController::class, 'show']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);

Route::get('/banners', [\App\Http\Controllers\BannerController::class, 'index']);
Route::get('/maps', [\App\Http\Controllers\MapController::class, 'index']);

Route::get('/settings/public', [\App\Http\Controllers\SettingController::class, 'publicIndex']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    Route::post('/destinations', [DestinationController::class, 'store']);
    Route::put('/destinations/{id}', [DestinationController::class, 'update']);
    Route::delete('/destinations/{id}', [DestinationController::class, 'destroy']);

    Route::post('/news', [NewsController::class, 'store']);
    Route::put('/news/{id}', [NewsController::class, 'update']);
    Route::delete('/news/{id}', [NewsController::class, 'destroy']);
    
    Route::post('/banners', [\App\Http\Controllers\BannerController::class, 'store']);
    Route::delete('/banners/{id}', [\App\Http\Controllers\BannerController::class, 'destroy']);
    
    Route::post('/maps', [\App\Http\Controllers\MapController::class, 'store']);
    Route::post('/maps/{id}', [\App\Http\Controllers\MapController::class, 'update']);
    Route::delete('/maps/{id}', [\App\Http\Controllers\MapController::class, 'destroy']);
    
    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index']);
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'update']);
});
