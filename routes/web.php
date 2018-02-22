<?php

Auth::routes();

/* PostController */

// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::resource('posts', 'PostController');
Route::get('/', 'PostController@index');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

/* BlogController */

Route::resource('blogs', 'BlogController');

/* CommentController */

Route::resource('comments', 'CommentController');

/* CategoryController */

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

?>
