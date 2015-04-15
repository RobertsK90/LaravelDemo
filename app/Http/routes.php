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