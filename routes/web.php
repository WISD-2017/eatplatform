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

Route::get('/stores', 'StoresController@index')->name('stores.index');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/comments', 'CommentsController@index')->name('comments.index');
    //瀏覽自己評價

    Route::get('/comments/{comment_id}', 'CommentsController@destroy')->name('comments.destroy');
    //刪評價

    Route::get('/comments/{comment_id}/edit', 'CommentsController@edit')->name('comments.edit');
    Route::patch('/comments/{comment_id}', 'CommentsController@update')->name('comments.update');
    //修改評價

    Route::get('/comments/create', 'CommentsController@create')->name('comments.create');
    Route::post('/comments', 'CommentsController@store')->name('comments.store');
    //新增評價
});
