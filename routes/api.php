<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/products', App\Http\Controllers\API\ProductsController::class);
Route::get('/categories', App\Http\Controllers\API\CategoriesController::class);
Route::get('/products/{product}', \App\Http\Controllers\API\ProductController::class);

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function($router) {
    Route::post('me', [App\Http\Controllers\API\AuthController::class, 'me']);
    Route::post('register', [App\Http\Controllers\API\AuthController::class, 'register']);
    Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login']);
    Route::post('refresh', [App\Http\Controllers\API\AuthController::class, 'refresh']);
    Route::post('logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
