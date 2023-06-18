<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    Route::get('/', '\App\Http\Controllers\Admin\IndexController@index')->name('admin');

    Route::group(['prefix' => 'brands'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\BrandController@index')->name('brand.index');
        Route::get('/{brand}', '\App\Http\Controllers\Admin\BrandController@show')->name('brand.show');
        Route::post('/', '\App\Http\Controllers\Admin\BrandController@store')->name('brand.store');
        Route::get('/{brand}/edit', '\App\Http\Controllers\Admin\BrandController@edit')->name('brand.edit');
        Route::patch('/{brand}', '\App\Http\Controllers\Admin\BrandController@update')->name('brand.update');
        Route::delete('/{brand}', '\App\Http\Controllers\Admin\BrandController@delete')->name('brand.delete');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\CategoryController@index')->name('category.index');
        Route::get('/{category}', '\App\Http\Controllers\Admin\CategoryController@show')->name('category.show');
        Route::post('/', '\App\Http\Controllers\Admin\CategoryController@store')->name('category.store');
        Route::get('/{category}/edit', '\App\Http\Controllers\Admin\CategoryController@edit')->name('category.edit');
        Route::patch('/{category}', '\App\Http\Controllers\Admin\CategoryController@update')->name('category.update');
        Route::delete('/{category}', '\App\Http\Controllers\Admin\CategoryController@delete')->name('category.delete');
    });

    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\CountryController@index')->name('country.index');
        Route::get('/create', '\App\Http\Controllers\Admin\CountryController@create')->name('country.create');
        Route::post('/', '\App\Http\Controllers\Admin\CountryController@store')->name('country.store');
        Route::get('/{country}/edit', '\App\Http\Controllers\Admin\CountryController@edit')->name('country.edit');
        Route::get('/{country}', '\App\Http\Controllers\Admin\CountryController@show')->name('country.show');
        Route::patch('/{country}', '\App\Http\Controllers\Admin\CountryController@update')->name('country.update');
        Route::delete('/{country}', '\App\Http\Controllers\Admin\CountryController@delete')->name('country.delete');
    });

    Route::group(['prefix' => 'manufacturers'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\ManufacturerController@index')->name('manufacturer.index');
        Route::get('/create', '\App\Http\Controllers\Admin\ManufacturerController@create')->name('manufacturer.create');
        Route::post('/', '\App\Http\Controllers\Admin\ManufacturerController@store')->name('manufacturer.store');
        Route::get('/{manufacturer}/edit', '\App\Http\Controllers\Admin\ManufacturerController@edit')->name('manufacturer.edit');
        Route::get('/{manufacturer}', '\App\Http\Controllers\Admin\ManufacturerController@show')->name('manufacturer.show');
        Route::patch('/{manufacturer}', '\App\Http\Controllers\Admin\ManufacturerController@update')->name('manufacturer.update');
        Route::delete('/{manufacturer}', '\App\Http\Controllers\Admin\ManufacturerController@delete')->name('manufacturer.delete');
    });

    Route::group(['prefix' => 'packaging-types'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\PackagingTypeController@index')->name('packaging.index');
        Route::get('/{type}', '\App\Http\Controllers\Admin\PackagingTypeController@show')->name('packaging.show');
        Route::post('/', '\App\Http\Controllers\Admin\PackagingTypeController@store')->name('packaging.store');
        Route::get('/{type}/edit', '\App\Http\Controllers\Admin\PackagingTypeController@edit')->name('packaging.edit');
        Route::patch('/{type}', '\App\Http\Controllers\Admin\PackagingTypeController@update')->name('packaging.update');
        Route::delete('/{type}', '\App\Http\Controllers\Admin\PackagingTypeController@delete')->name('packaging.delete');
    });

    Route::group(['prefix' => 'payment-types'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\PaymentTypeController@index')->name('payment.index');
        Route::get('/{type}', '\App\Http\Controllers\Admin\PaymentTypeController@show')->name('payment.show');
        Route::post('/', '\App\Http\Controllers\Admin\PaymentTypeController@store')->name('payment.store');
        Route::get('/{type}/edit', '\App\Http\Controllers\Admin\PaymentTypeController@edit')->name('payment.edit');
        Route::patch('/{type}', '\App\Http\Controllers\Admin\PaymentTypeController@update')->name('payment.update');
        Route::delete('/{type}', '\App\Http\Controllers\Admin\PaymentTypeController@delete')->name('payment.delete');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\ProductController@index')->name('product.index');
        Route::get('/create', '\App\Http\Controllers\Admin\ProductController@create')->name('product.create');
        Route::post('/', '\App\Http\Controllers\Admin\ProductController@store')->name('product.store');
        Route::get('/{product}/edit', '\App\Http\Controllers\Admin\ProductController@edit')->name('product.edit');
        Route::get('/{product}', '\App\Http\Controllers\Admin\ProductController@show')->name('product.show');
        Route::patch('/{product}', '\App\Http\Controllers\Admin\ProductController@update')->name('product.update');
        Route::get('/{product}/removeImage/removeImage/{image}', '\App\Http\Controllers\Admin\ProductController@removeImage')->name('product.removeImage');
        Route::delete('/{product}', '\App\Http\Controllers\Admin\ProductController@delete')->name('product.delete');
    });

    Route::group(['prefix' => 'statuses'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\StatusController@index')->name('status.index');
        Route::get('/{status}', '\App\Http\Controllers\Admin\StatusController@show')->name('status.show');
        Route::post('/', '\App\Http\Controllers\Admin\StatusController@store')->name('status.store');
        Route::get('/{status}/edit', '\App\Http\Controllers\Admin\StatusController@edit')->name('status.edit');
        Route::patch('/{status}', '\App\Http\Controllers\Admin\StatusController@update')->name('status.update');
        Route::delete('/{status}', '\App\Http\Controllers\Admin\StatusController@delete')->name('status.delete');
    });

    Route::group(['prefix' => 'positions'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\PositionController@index')->name('position.index');
        Route::get('/{position}', '\App\Http\Controllers\Admin\PositionController@show')->name('position.show');
        Route::post('/', '\App\Http\Controllers\Admin\PositionController@store')->name('position.store');
        Route::get('/{position}/edit', '\App\Http\Controllers\Admin\PositionController@edit')->name('position.edit');
        Route::patch('/{position}', '\App\Http\Controllers\Admin\PositionController@update')->name('position.update');
        Route::delete('/{position}', '\App\Http\Controllers\Admin\PositionController@delete')->name('position.delete');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\TagController@index')->name('tag.index');
        Route::get('/{tag}', '\App\Http\Controllers\Admin\TagController@show')->name('tag.show');
        Route::post('/', '\App\Http\Controllers\Admin\TagController@store')->name('tag.store');
        Route::get('/{tag}/edit', '\App\Http\Controllers\Admin\TagController@edit')->name('tag.edit');
        Route::patch('/{tag}', '\App\Http\Controllers\Admin\TagController@update')->name('tag.update');
        Route::delete('/{tag}', '\App\Http\Controllers\Admin\TagController@delete')->name('tag.delete');
    });

    Route::group(['prefix' => 'time-types'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\TimeTypeController@index')->name('time.index');
        Route::get('/{type}', '\App\Http\Controllers\Admin\TimeTypeController@show')->name('time.show');
        Route::post('/', '\App\Http\Controllers\Admin\TimeTypeController@store')->name('time.store');
        Route::get('/{type}/edit', '\App\Http\Controllers\Admin\TimeTypeController@edit')->name('time.edit');
        Route::patch('/{type}', '\App\Http\Controllers\Admin\TimeTypeController@update')->name('time.update');
        Route::delete('/{type}', '\App\Http\Controllers\Admin\TimeTypeController@delete')->name('time.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\UserController@index')->name('user.index');
        Route::get('/create', '\App\Http\Controllers\Admin\UserController@create')->name('user.create');
        Route::post('/', '\App\Http\Controllers\Admin\UserController@store')->name('user.store');
        Route::get('/{user}', '\App\Http\Controllers\Admin\UserController@show')->name('user.show');
        Route::get('/{user}/edit', '\App\Http\Controllers\Admin\UserController@edit')->name('user.edit');
        Route::patch('/{user}', '\App\Http\Controllers\Admin\UserController@update')->name('user.update');
        Route::delete('/{user}', '\App\Http\Controllers\Admin\UserController@delete')->name('user.delete');
    });

    Route::group(['prefix' => 'weight-types'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\WeightTypeController@index')->name('weight.index');
        Route::get('/{type}', '\App\Http\Controllers\Admin\WeightTypeController@show')->name('weight.show');
        Route::post('/', '\App\Http\Controllers\Admin\WeightTypeController@store')->name('weight.store');
        Route::get('/{type}/edit', '\App\Http\Controllers\Admin\WeightTypeController@edit')->name('weight.edit');
        Route::patch('/{type}', '\App\Http\Controllers\Admin\WeightTypeController@update')->name('weight.update');
        Route::delete('/{type}', '\App\Http\Controllers\Admin\WeightTypeController@delete')->name('weight.delete');
    });

    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\OrderController@index')->name('order.index');
        Route::get('/{order}', '\App\Http\Controllers\Admin\OrderController@show')->name('order.show');
        Route::get('/{order}/edit', '\App\Http\Controllers\Admin\OrderController@edit')->name('order.edit');
        Route::patch('/{order}', '\App\Http\Controllers\Admin\OrderController@update')->name('order.update');
    });
});

Route::get('{page}', \App\Http\Controllers\IndexController::class)->where('page', '.*');
