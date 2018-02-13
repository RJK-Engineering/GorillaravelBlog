<?php

// use App\Post;

Route::get('/', 'PostController@index');
// Route::get('/{post}', 'PostController@show');
Route::get('/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
