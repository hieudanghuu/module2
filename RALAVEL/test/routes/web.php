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

Route::get ('/login',function(){
       return view('login');
});

Route::post('/login', function(Illuminate\Http\Request $request){
if($request->username == 'admin' && $request->password == 'admin'){
    return view('welcom_admin');
}
return view('login_error');
});
