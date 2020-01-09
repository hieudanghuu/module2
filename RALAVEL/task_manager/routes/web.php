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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController1@index');
    Route::get('create', 'CustomerController1@create');
    Route::post('store', 'CustomerController1@store');
    Route::get('{id}/show', 'CustomerController1@show',)->where('id', '[0-9]+');
    Route::get('{id}/edit', 'CustomerController1@edit')->where('id', '[0-9]+');
    Route::patch('{id}/update', 'CustomerController1@update')->where('id', '[0-9]+');
    Route::get('{id}', 'CustomerController1@destroy')->where('id', '[0-9]+');
});

Route::prefix('tasks')->group(function () {
    Route::get('index', 'CustomerController1@index');
    Route::get('create', 'CustomerController1@create');
    Route::post('store', 'CustomerController1@store');
    Route::get('{id}/show', 'CustomerController1@show',)->where('id', '[0-9]+');
    Route::get('{id}/edit', 'CustomerController1@edit')->where('id', '[0-9]+');
    Route::patch('{id}/update', 'CustomerController1@update')->where('id', '[0-9]+');
    Route::get('{id}', 'CustomerController1@destroy')->where('id', '[0-9]+');
});
