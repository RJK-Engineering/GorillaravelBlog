<?php
// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');
Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/', 'PostController@index');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

Route::view('/snippets', 'TextExpander.create');
Route::post('/snippets/create', 'TextExpanderController@store');
Route::get('/snippets/index', 'TextExpanderController@index');
Route::get('snippets/json', 'TextExpanderController@json');
?>
