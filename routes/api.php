<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('brands', BrandController::class);
Route::post('users/register', [UserController::class, 'register']);
Route::post('users/login', [UserController::class, 'login']);
