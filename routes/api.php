<?php

use Illuminate\Http\Request;
//auth
Route::post('login','Api\AuthController@login');
Route::post('register','Api\AuthController@register');
Route::get('logout','Api\AuthController@logout');

//post
Route::post('posts/create','Api\PostController@create')->middleware('jwtAuth');
Route::post('posts/delete','Api\PostController@delete')->middleware('jwtAuth');
Route::post('posts/update','Api\PostController@update')->middleware('jwtAuth');
Route::post('posts','Api\PostController@posts')->middleware('jwtAuth');
