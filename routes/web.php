<?php

Route::view('/', 'home.welcome');

Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('blogs', 'BlogController');
    Route::resource('permissions', 'PermissionController');
});

// get posts/search route only works when declared before resource posts routes
Route::get('/posts/search', 'PostController@search');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::get('/posts/json', 'PostController@json');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');
Route::get('/posts/{blog}/create', 'PostController@create');
Route::get('/posts/{blog}/edit', 'PostController@edit');

Route::get('/{blog}', 'HomeController@posts');
Route::get('/{blog}/admin', 'Admin\PostController@index');
Route::get('/{blog}/{post}', 'PostController@show');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/categories/{category}/posts', 'CategoryController@posts');

Route::view('/snippets', 'TextExpander.create');
Route::post('/snippets/create', 'TextExpanderController@store');
Route::get('/snippets/index', 'TextExpanderController@index');
Route::get('snippets/json', 'TextExpanderController@json');

?>
