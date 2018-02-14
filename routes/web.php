<?php

Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
//
Route::post('/comment/{post}', 'CommentController@store');
