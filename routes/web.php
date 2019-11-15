<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/'         , ['as' => 'home.index' , 'uses' => 'HomeController@index']);
Route::get('posts'     , ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/{id}', ['as' => 'posts.show' , 'uses' => 'PostsController@show']);

// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);
    //單元練習< 練習6-4> 設定更新所需的 Route
    Route::patch('posts/{id}',    ['as' => 'admin.posts.update', 'uses' => 'AdminPostsController@update']);
    //單元練習< 練習4-3> 開啟新增的Route
    Route::post('posts',['as'=>'admin.posts.store','uses'=> 'AdminPostsController@store']);
    //單元練習< 練習7-1> 設定所需的 Route
    Route::delete('posts/{id}'  , ['as' => 'admin.posts.destroy', 'uses' => 'AdminPostsController@destroy']);
});
