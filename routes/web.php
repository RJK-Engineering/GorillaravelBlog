<?php

Auth::routes();

Route::resource('posts', 'PostController');
Route::get('/', 'PostController@index');
Route::post('/posts/search', 'PostController@search');
Route::get('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

?>
