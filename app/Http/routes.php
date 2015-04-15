<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('home', 'PagesController@home');

Route::get('post/{slug}', [
    'as' => 'post.show',
    'uses' => 'PostsController@show'

]);

Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\PasswordController');

Route::resource('comments', 'CommentsController');

/** Routes for resource (posts and comments) administration. Admin middleware used to make sure that
 * only administrators can access these routes*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::resource('posts', 'PostsController', ['except' => 'show']);
    Route::resource('comments', 'CommentsController', ['except' => 'store']);
});