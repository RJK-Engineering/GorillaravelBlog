<?php
// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');
Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/', 'PostController@index');
Route::get('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

?>
