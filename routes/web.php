<?php

// use App\Post;

Route::get('/', 'PostController@index');
// Route::get('/{post}', 'PostController@show');
Route::get('/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::get('/category', 'CategoryController@index');
Route::get('/category/{category}', 'CategoryController@show');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
