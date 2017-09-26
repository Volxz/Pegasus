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
    return view('splash');
});


Route::resource('posts', 'PostController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('login', function (){
    return redirect('/oauth/google');
});


Route::get('/oauth/google', 'OauthController@googleOauth');

Auth::routes();