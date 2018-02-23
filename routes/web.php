<?php

/* Auth Controllers */

Auth::routes();

/* BlogController */

Route::resource('blogs', 'BlogController');
Route::get('/{blog}/posts', 'BlogController@posts');

/* HomeController */

Route::get('/', 'HomeController@home');
Route::get('/{blog}', 'HomeController@posts');

/* PostController */

// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

/* CommentController */

Route::resource('comments', 'CommentController');

/* CategoryController */

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

?>
