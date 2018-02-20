<?php

Route::resource('posts', 'PostController');
Route::get('/', 'PostController@index');
Route::patch('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');
Route::post('/posts/search', 'PostController@search');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

?>
