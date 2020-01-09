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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('view');
});


Route::post('/product', function (Request $request) {
    $product = $request->input('product');
    $price = $request->input('price');
    $discount = $request->input('discount');
    $amount = $price * $discount * 0.01;
    $discountprice = $price - $amount;
    return view('product',['product' => $product, 'price' => $price , 'discount' => $discount,'amount' =>$amount, 'discountprice'=>$discountprice]);
});


