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

/*
Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});

Route::redirect('/here', '/there', 301);
Route::get('user/profile', 'UserController@showProfile')->name('profile');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propiedades', 'PropertyController@index');


