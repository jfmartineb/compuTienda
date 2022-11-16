<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');

Route::post('/review/store', 'App\Http\Controllers\ReviewController@add')->name('review.add');
Route::get('/review/show/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::get('/review/{id}', 'App\Http\Controllers\ReviewController@index')->name('review.index');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@removeAll')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name('admin.product.index');
Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name('admin.product.store');
Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name('admin.product.delete');
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('admin.product.edit');
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', 'App\Http\Controllers\LangController@index')->name('language');