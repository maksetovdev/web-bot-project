<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;

// Auth Routes
Route::post('users/register', [UserController::class, 'register']);
Route::post('users/login', [UserController::class, 'login']);
//Other Routes
Route::apiResource('categories', CategoryController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('products', ProductsController::class);
Route::middleware('auth:sanctum')->apiResource('baskets', BasketController::class);
Route::middleware('auth:sanctum')->apiResource('orders', OrderController::class);
