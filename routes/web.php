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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'stores'], function() {
    /*瀏覽所有店家*/
    Route::get('/', 'StoresController@index')->name('stores.index');
    /*瀏覽店家介紹*/
    Route::get('{store_id}', 'StoresController@show')->name('stores.show');
});

Route::get('/index', function () {
    return view('rating');
});