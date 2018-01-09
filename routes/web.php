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

    Route::get('/comments/create/{store_id}', 'CommentsController@create')->name('comments.create');
    Route::post('/comments/{store_id}', 'CommentsController@store')->name('comments.store');
    //新增評價

    Route::get('/comments/{comment_id}', 'CommentsController@destroy')->name('comments.destroy');
    //刪評價

    Route::get('/comments/{comment_id}/edit', 'CommentsController@edit')->name('comments.edit');
    Route::patch('/comments/{comment_id}/update', 'CommentsController@update')->name('comments.update');
    //修改評價


});
Route::group(['prefix' => 'admins'], function() {
    
	Route::get('/', function () {
    return view('admin.index');
});

	//瀏覽檢舉店家
    Route::get('/store', 'AdminStoreController@index')->name('admin.stores');
    //瀏覽檢舉評價
      Route::get('/comment', 'AdminCommentController@index')->name('admin.comments');

	  });
