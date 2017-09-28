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
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/admin/unapproved', function () {
    return view('admin.unapproved');
});
Route::get('/admin/approved', function () {
    return view('admin.approved');
});
Route::get('/error', function () {
    return view('error');
});

Route::resource('posts', 'PostController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('login', function (){
    return redirect('/oauth/google');
});


Route::get('/oauth/google', 'OauthController@googleOauth');

Route::get('/admin/datatables/uposts', 'DataTablesController@unapprovedPosts');

Route::get('/admin/datatables/aposts', 'DataTablesController@approvedPosts');

Route::get('/admin/datatables/dposts', 'DataTablesController@deletedPosts');

Route::get('/admin/datatables/users','DataTablesController@users');

Route::get('/admin/datatables/admins','DataTablesController@admins');


Auth::routes();