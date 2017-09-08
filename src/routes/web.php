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
Route::get('/category/{id}', 'CategoryController@show')->name('CatShow');
Route::get('/product', 'ProductController@index')->name('ProIndex');
Route::get('/product/{id}', 'ProductController@show')->name('ProShow');
Route::get('/sellproduct', 'SellProductController@index')->name('SellIndex');
Route::get('/sellproduct/{id}', 'SellProductController@show')->name('SellShow');
Route::get('/supplier', 'SupplierController@index')->name('SuppIndex');
Route::get('/supplier/{id}', 'SupplierController@show')->name('SuppShow');
Route::get('/users', 'UserController@index')->name('UsersIndex');
Route::get('/users/{id}', 'UserController@show')->name('UsersShow');
Route::get('/userproduct', 'UserProductController@index')->name('UserproIndex');
Route::get('/userproduct/{id}', 'UserProductController@show')->name('UserproShow');


