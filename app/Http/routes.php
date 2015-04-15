<?php



Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('post/{slug}', [
    'as' => 'post.show',
    'uses' => 'PostsController@show'

]);

Route::controller('/', 'Auth\AuthController');