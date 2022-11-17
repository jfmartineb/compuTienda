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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Products API
Route::get('/products', 'App\Http\Controllers\Api\ProductApi@index')->name('api.product.index');
Route::get('/products/{id}', 'App\Http\Controllers\Api\ProductApi@show')->name('api.product.show');

//External API
Route::get('/news', 'App\Http\Controllers\Api\ExternalApi@index')->name('api.news');

//Tiendita Store API
Route::get('/store', 'App\Http\Controllers\Api\StoreApi@index')->name('api.store');
