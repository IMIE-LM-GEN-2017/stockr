<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index')->name('CatIndex');
Route::get('/category/{id}', 'CategoryController@show')->name('CatShow');

Route::get('/product', 'ProductController@index')->name('ProIndex');
Route::get('/product/{id}', 'ProductController@show')->name('ProShow');

Route::get('/sellProduct', 'SellProductController@index')->name('SellIndex');
Route::get('/sellProduct/{id}', 'SellProductController@show')->name('SellShow');

Route::get('/supplier', 'SupplierController@index')->name('SuppIndex');
Route::get('/supplier/{id}', 'SupplierController@show')->name('SuppShow');

Route::get('/users', 'UserController@index')->name('UsersIndex');
Route::get('/users/{id}', 'UserController@show')->name('UsersShow');

Route::get('/userProduct', 'UserProductController@index')->name('UserproIndex');
Route::get('/userProduct/{id}', 'UserProductController@show')->name('UserproShow');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', 'Admin\UserController@index')->name('AdminUserIndex');
    Route::get('/user/{id}', 'Admin\UserController@show')->name('AdminUserShow');
    Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('AdminUserEdit');
    Route::post('/user/{id}/update', 'Admin\UserController@update')->name('AdminUserUpdate');
    Route::get('/user/{id}/destroy', 'Admin\UserController@destroy')->name('AdminUserDestroy');
    Route::get('/dashboard', 'Admin\UserController@dashboard')->name('AdminUserDashboard');

    Route::get('/categories', 'Admin\CategoryController@index')->name('AdminCatIndex');
    Route::get('/category/create', 'Admin\CategoryController@create')->name('AdminCatCreate');
    Route::post('/category/store', 'Admin\CategoryController@store')->name('AdminCatStore');
    Route::get('/category/{id}', 'Admin\CategoryController@show')->name('AdminCatShow');
    Route::get('/category/{id}/edit', 'Admin\CategoryController@edit')->name('AdminCatEdit');
    Route::post('/category/{id}/update', 'Admin\CategoryController@update')->name('AdminCatUpdate');
    Route::get('/category/{id}/destroy', 'Admin\CategoryController@destroy')->name('AdminCatDestroy');

    Route::get('/products', 'Admin\ProductController@index')->name('AdminProdIndex');
    Route::get('/product/create', 'Admin\ProductController@create')->name('AdminProdCreate');
    Route::post('/product/store', 'Admin\ProductController@store')->name('AdminProdStore');
    Route::get('/product/{id}', 'Admin\ProductController@show')->name('AdminProdShow');
    Route::get('/product/{id}/edit', 'Admin\ProductController@edit')->name('AdminProdEdit');
    Route::post('/product/{id}/update', 'Admin\ProductController@update')->name('AdminProdUpdate');
    Route::get('/product/{id}/destroy', 'Admin\ProductController@destroy')->name('AdminProdDestroy');

    Route::get('/sellProduct', 'Admin\SellProductController@index')->name('AdminSellProdIndex');
    Route::get('/sellProduct/create', 'Admin\SellProductController@create')->name('AdminSellProdCreate');
    Route::post('/sellProduct/store', 'Admin\SellProductController@store')->name('AdminSellProdStore');
    Route::get('/sellProduct/{id}', 'Admin\SellProductController@show')->name('AdminSellProdShow');
    Route::get('/sellProduct/{id}/edit', 'Admin\SellProductController@edit')->name('AdminSellProdEdit');
    Route::post('/sellProduct/{id}/update', 'Admin\SellProductController@update')->name('AdminSellProdUpdate');
    Route::get('/sellProduct/{id}/destroy', 'Admin\SellProductController@destroy')->name('AdminSellProdDestroy');

    Route::get('/suppliers', 'Admin\SupplierController@index')->name('AdminSuppIndex');
    Route::get('/supplier/create', 'Admin\SupplierController@create')->name('AdminSuppCreate');
    Route::post('/supplier/store', 'Admin\SupplierController@store')->name('AdminSuppStore');
    Route::get('/supplier/{id}', 'Admin\SupplierController@show')->name('AdminSuppShow');
    Route::get('/supplier/{id}/edit', 'Admin\SupplierController@edit')->name('AdminSuppEdit');
    Route::post('/supplier/{id}/update', 'Admin\SupplierController@update')->name('AdminSuppUpdate');
    Route::get('/supplier/{id}/destroy', 'Admin\SupplierController@destroy')->name('AdminSuppDestroy');

    Route::get('/userProduct', 'Admin\UserProductController@index')->name('AdminUserProdIndex');
    Route::get('/userProduct/create', 'Admin\UserProductController@create')->name('AdminUserProdCreate');
    Route::post('/userProduct/store', 'Admin\UserProductController@store')->name('AdminUserProdStore');
    Route::get('/userProduct/{id}', 'Admin\UserProductController@show')->name('AdminUserProdShow');
    Route::get('/userProduct/{id}/edit', 'Admin\UserProductController@edit')->name('AdminUserProdEdit');
    Route::post('/userProduct/{id}/update', 'Admin\UserProductController@update')->name('AdminUserProdUpdate');
    Route::get('/userProduct/{id}/destroy', 'Admin\UserProductController@destroy')->name('AdminUserProdDestroy');

    Route::get('/supplierproduct', 'Admin\SupplierProductController@index')->name('AdminSuppProdIndex');
    Route::get('/supplierproduct/create', 'Admin\SupplierProductController@create')->name('AdminSuppProdCreate');
    Route::post('/supplierproduct/store', 'Admin\SupplierProductController@store')->name('AdminSuppProdStore');
    Route::get('/supplierproduct/{id}', 'Admin\SupplierProductController@show')->name('AdminSuppProdShow');
    Route::get('/supplierproduct/{id}/edit', 'Admin\SupplierProductController@edit')->name('AdminSuppProdEdit');
    Route::post('/supplierproduct/{id}/update', 'Admin\SupplierProductController@update')->name('AdminSuppProdUpdate');
    Route::get('/supplierproduct/{id}/destroy', 'Admin\SupplierProductController@destroy')->name('AdminSuppProdDestroy');
});

Auth::routes();

