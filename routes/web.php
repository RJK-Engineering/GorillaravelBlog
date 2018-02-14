<?php

// use App\Post;

Route::get('/', 'PostController@index');
// Route::get('/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');

Route::get('/comment/create', 'CommentController@create');
Route::post('/comment'. 'CommentController@store');
