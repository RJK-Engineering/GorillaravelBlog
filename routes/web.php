<?php

/* Auth Controllers */

Auth::routes();

/* BlogController */

Route::resource('blogs', 'BlogController');
Route::get('/{blog}/posts', 'BlogController@posts');

/* HomeController */

Route::view('/', 'home.welcome');
Route::get('/{blog}', 'HomeController@posts');

/* PostController */

// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::get('/posts/json', 'PostController@json');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

/* CommentController */

Route::resource('comments', 'CommentController');

/* CategoryController */

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

Route::view('/snippets', 'TextExpander.create');
Route::post('/snippets/create', 'TextExpanderController@store');
Route::get('/snippets/index', 'TextExpanderController@index');
Route::get('snippets/json', 'TextExpanderController@json');

?>
