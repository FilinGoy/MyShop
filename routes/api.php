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

Route::get('/categories', App\Http\Controllers\API\CategoryController::class);
Route::get('/getPaymentTypes', App\Http\Controllers\API\PaymentTypeController::class);

Route::get('/category/{category}', 'App\Http\Controllers\API\ProductController@getProductFromCategory');
Route::get('/product/{product}', 'App\Http\Controllers\API\ProductController@getProduct');
Route::post('/product/{product}/addReview', 'App\Http\Controllers\API\ReviewController@addReview');
Route::post('/product/{review}/removeReview', 'App\Http\Controllers\API\ReviewController@removeReview');
Route::get('/product/{product}/listReviews', 'App\Http\Controllers\API\ReviewController@listReviews');
Route::post('/orders', 'App\Http\Controllers\API\OrderController@getOrders');
Route::get('/order/{order}', 'App\Http\Controllers\API\OrderController@getOrder');
Route::post('/editProfile', '\App\Http\Controllers\API\UserController@editProfile');
Route::post('/search', '\App\Http\Controllers\API\ProductsController@getSearch');
Route::post('/orderBuy', '\App\Http\Controllers\API\OrderController@storeOrder');

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function($router) {
    Route::post('me', [App\Http\Controllers\API\AuthController::class, 'me']);
    Route::post('register', [App\Http\Controllers\API\AuthController::class, 'register']);
    Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login']);
    Route::post('refresh', [App\Http\Controllers\API\AuthController::class, 'refresh']);
    Route::post('logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
