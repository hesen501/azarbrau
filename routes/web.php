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
Route::get('/adminn','App\Http\Controllers\AdminController@index')->name('dashboard');
Route::get('/map','App\Http\Controllers\AdminController@map')->name('map');
Route::get('/404','App\Http\Controllers\AdminController@error')->name('404');
Route::get('/blank','App\Http\Controllers\AdminController@blank')->name('blank');
Route::get('/profile','App\Http\Controllers\AdminController@profile')->name('profile');
Route::get('/icon','App\Http\Controllers\AdminController@icon')->name('icon');
Route::get('/table','App\Http\Controllers\AdminController@table')->name('table');

Route::get('/','App\Http\Controllers\frontController@index')->name('home');
Route::get('/about','App\Http\Controllers\frontController@about')->name('about');
Route::get('/news','App\Http\Controllers\frontController@news')->name('news');
Route::get('/news-single','App\Http\Controllers\frontController@news_single')->name('news-single');
Route::get('/products','App\Http\Controllers\frontController@products')->name('products');
Route::get('/products-single','App\Http\Controllers\frontController@products_single')->name('products-single');
Route::get('/contact','App\Http\Controllers\frontController@contact')->name('contact');
Route::get('/maps','App\Http\Controllers\frontController@maps')->name('maps');