<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\LuongQuocHoiController;
use App\Http\Controllers\HuyLocApiController;
use App\Models\Huyloc;
use App\Models\LuongQuocHoi;
use App\Http\Controllers\QuyController;


// Route::post('products', [ProductController::class, 'store']);
// Route::get('products', [ProductController::class, 'index']);
// Route::put('products/{id}', [ProductController::class, 'update']);
// Route::get('products/{id}', [ProductController::class, 'show']);
// Route::delete('products/{id}', [ProductController::class, 'destroy']);

Route::apiResource('products', ProductController::class);

Route::apiResource('customers', CustomerController::class);

Route::apiResource('categories', CategoriesController::class);

Route::apiResource('reviews', ReviewController::class);
Route::apiResource('feature', FeatureController::class);


Route::apiResource('luongquochoi', LuongQuocHoiController::class);




Route::apiResource('quy', QuyController::class);


