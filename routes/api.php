<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/auth', 'AuthController@login');

Route::middleware(['App\Http\Middleware\VerifyJWT'])->group(function () {
    Route::get('/products', 'ProductsController@index');
    Route::post('/products', 'ProductsController@store');
    Route::get('/products/{product}', 'ProductsController@get');
    Route::put('/products/{product}', 'ProductsController@update');
    Route::delete('/products/{product}', 'ProductsController@delete');
});

Route::middleware(['App\Http\Middleware\VerifyJWT'])->group(function () {
    Route::get('/categories', 'CategoriesController@index');
    Route::post('/categories', 'CategoriesController@store');
    Route::get('/categories/{category}', 'CategoriesController@get');
    Route::put('/categories/{category}', 'CategoriesController@update');
    Route::delete('/categories/{category}', 'CategoriesController@delete');
});
