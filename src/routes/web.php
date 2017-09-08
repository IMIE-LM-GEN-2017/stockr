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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index')->name('CatIndex');
Route::get('/category', 'CategoryController@show')->name('CatShow');
Route::get('/product', 'ProductController@index')->name('ProIndex');
Route::get('/product', 'ProductController@show')->name('ProShow');
Route::get('/sellproduct', 'SellProductController@index')->name('SellIndex');
Route::get('/sellproduct', 'SellProductController@show')->name('SellShow');
Route::get('/supplier', 'SupplierController@index')->name('SuppIndex');
Route::get('/supplier', 'SupplierController@show')->name('SuppShow');
Route::get('/users', 'UserController@index')->name('UsersIndex');
Route::get('/users', 'UserController@show')->name('UsersShow');
Route::get('/userproduct', 'UserProductController@index')->name('UserproIndex');
Route::get('/userproduct', 'UserProductController@show')->name('UserproShow');


