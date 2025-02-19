<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

///
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Products\ProductCategorizationController;
use App\Http\Controllers\Products\ProductChangeHistoryController;
use App\Http\Controllers\Products\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/auth/login', [AuthController::class, 'loginUser']);


Route::prefix('/product-categorization/V1')->group(function(){
    Route::get('index', [ProductCategorizationController::class, 'index']);
});

Route::prefix('/product-change-history/V1')->group(function(){
    Route::get('index', [ProductChangeHistoryController::class, 'index']);
});

Route::prefix('/product/V1')->group(function(){
    Route::get('index', [ProductController::class, 'index']);
    Route::post('create', [ProductController::class, 'create']);
    Route::put('update', [ProductController::class, 'update']);
});

