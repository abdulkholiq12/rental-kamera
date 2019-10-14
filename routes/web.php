<?php

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

Route::get('/', 'UserController@index')->name('homeuser');
Route::get('/about-us', 'UserController@about');
Route::get('/list-product', 'UserController@product');
Route::get('/list-product/{id}', 'UserController@detailproduct');
Route::get('/termandcondition', 'UserController@termandcondition');
Route::get('/article', 'UserController@article');
Route::get('/booking', 'UserController@booking');
Route::post('/booking', 'UserController@store')->name('createbooking');

Auth::routes();

Route::get('/admin/home', 'AdminController@index')->middleware(['validateAuth'])->name('homeadmin');
// Route::get('/admin/sewa', 'AdminController@sewa')->middleware(['validateAuth']);
// Route::get('/admin/produk', 'AdminController@produk')->middleware(['validateAuth']);

Route::resource('/admin/product', 'ProductController')->middleware(['validateAuth']);
Route::resource('/admin/sewa', 'DaftarSewaController')->middleware(['validateAuth']);
Route::resource('/admin/booking', 'BookingController')->middleware(['validateAuth']);
Route::resource('/admin/article', 'ArticleController')->middleware(['validateAuth']);

