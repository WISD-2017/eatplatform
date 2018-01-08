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

Route::group(['middleware'=>'auth'],function(){

    Route::get('/comments', 'CommentsController@index')->name('comments.index');
    //瀏覽自己評價

    Route::get('/comments/all', 'CommentsController@all')->name('comments.all');
    //瀏覽所有評價

    Route::get('/comments/create', 'CommentsController@create')->name('comments.create');
    Route::post('/comments', 'CommentsController@store')->name('comments.store');
    //新增評價

    Route::get('/comments/{comment_id}', 'CommentsController@destroy')->name('comments.destroy');
    //刪評價

    Route::get('/comments/{comment_id}/edit', 'CommentsController@edit')->name('comments.edit');
    Route::patch('/comments/{comment_id}', 'CommentsController@update')->name('comments.update');
    //修改評價


});
