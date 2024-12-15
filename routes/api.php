<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// post routes
Route::apiResource('posts', PostController::class);

// auth:user routes
Route::post('/register', [authController::class, 'register']);
Route::post('/login', [authController::class, 'login']);
Route::post('/logout', [authController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');
