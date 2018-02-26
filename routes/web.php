<?php

/* Home */

Route::view('/', 'home.welcome');

/* Auth Controllers */

Auth::routes();

/* BlogController */

Route::resource('blogs', 'BlogController');
// Route::get('/{blog}/posts', 'BlogController@posts');

/* PostController */

// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::get('/posts/json', 'PostController@json');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

/* HomeController */

Route::get('/{blog}', 'HomeController@posts');
Route::get('/{blog}/admin', 'Admin\PostController@index');

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
