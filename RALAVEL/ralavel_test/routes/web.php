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
    $students = ['hoang','tân','nguyên'];
    $name = 'hoang';
    $age = 23;
    return view('welcome', ['name'=> $name,'age'=>$age,'students'=>$students] );
});

Route::get('/hello', function () {
    $name = 'tien';
    $age = 23;
    return view('welcome1', ['name'=> $name,'age'=>$age]);
});


Route::post('/', function (Request $request ) {
    $name = $request->input('name');

    return view('welcome1', ['name'=> $name,'age'=>$age]);
});


Route::get('/calculator', function () {
    $name = 'name';

    return view('welcome2', ['name'=> $name]);
});

