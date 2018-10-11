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
Route::pattern('id', '[0-9]+');
Route::get('/home', 'FrontController@index')->name('home');
Route::post('/postaddurl', 'FrontController@postAddUrl')->name('postaddurl');
Route::get('/show/', 'FrontController@showUrl')->name('show');
