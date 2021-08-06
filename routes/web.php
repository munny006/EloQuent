<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/users','UserController@index')->name('users');
Route::get('/posts','PostController@index')->name('posts');

Route::get('/mahmuda','PostController@posts');