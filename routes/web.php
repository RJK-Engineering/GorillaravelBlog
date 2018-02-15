<?php

Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');

Route::post('/comment/{post}', 'CommentController@store');

Route::get('/categories', 'CategoryController@index');
// Route::get('/category/{category}', 'CategoryController@show');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');

Route::get('/comment/create', 'CommentController@create');
Route::post('/comment'. 'CommentController@store');

?>

