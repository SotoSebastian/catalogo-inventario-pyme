<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductMovementController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::delete('/logout', [AuthController::class, 'logout']);
    Route::apiResource('productos', ProductController::class);
    Route::get('/movimientos', [ProductMovementController::class, 'index']);
    Route::post('/movimientos', [ProductMovementController::class, 'store']);
    Route::get('/dashboard/stock-bajo',[DashboardController::class, 'stockBajo']);
    Route::get('/dashboard/resumen',[DashboardController::class, 'resumen']);
});