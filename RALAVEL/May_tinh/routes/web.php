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


Route::group(['prefix' => 'caculator'], function () {

    Route::get('index','Caculater@index');
    Route::post('operation','Caculater@operation');
});

Route::group(['prefix' => 'customer'], function () {

    Route::get('index','CustomerController@index')->name('customers.index');

});


