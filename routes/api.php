<?php

use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('brands', BrandController::class);
