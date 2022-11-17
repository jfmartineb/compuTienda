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

Route::post('/review/add', 'App\Http\Controllers\ReviewController@add')->name('review.add');
Route::get('/review/show/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::get('/review/{id}', 'App\Http\Controllers\ReviewController@index')->name('review.index');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::middleware('admin')->group(function () { 
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");});
    Route::middleware('auth')->group(function () { Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");}); 

    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");

Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/best', 'App\Http\Controllers\ProductController@bestReviews')->name('product.best');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');




Route::get('/admin/users', 'App\Http\Controllers\Admin\AdminUserController@index')->name("admin.user.index");
Route::post('/admin/users/store', 'App\Http\Controllers\Admin\AdminUserController@store')->name("admin.user.store"); 
Route::delete('/admin/users/{id}/delete','App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");
Route::get('/admin/users/{id}/edit','App\Http\Controllers\Admin\AdminUserController@edit')->name("admin.user.edit");
Route::put('/admin/users/{id}/update','App\Http\Controllers\Admin\AdminUserController@update')->name("admin.user.update"); 
Route::get('/admin/users/pdf', 'App\Http\Controllers\Admin\AdminUserController@pdf')->name("admin.user.pdf");
Route::get('/admin/users/excel', 'App\Http\Controllers\Admin\AdminUserController@excel')->name("admin.user.excel");




Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name('admin.product.store');
Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name('admin.product.delete');
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('admin.product.edit');
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', 'App\Http\Controllers\LangController@index')->name('language');