<?php

Route::view('/welcome', 'home.welcome');

Auth::routes();

Route::get('/posts/latest', 'PostController@latest');

Route::post('/blogs/subscribe', 'BlogController@toggleSubscription')->name('toggleSubscription');

// Route::group(['middleware' => ['permission:publish articles|edit articles']], function () {
Route::put('/users/updatePermissions', 'UserController@updatePermissions')->name('users.updatePermissions');
Route::middleware(['auth'])->group(function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('blogs', 'BlogController');
    Route::resource('permissions', 'PermissionController');
});

// Route::middleware(['permission:add_posts'])->group(function() {
//     Route::get('blogs', 'BlogController@index');
// });

Route::post('/{blog}/posts/{post}/toggleCommentStatus', 'PostController@toggleCommentStatus');
// get posts/search route only works when declared before resource posts routes
Route::get('/{blog}/posts/search', 'PostController@search');
Route::get('/{blog}/posts/{post}/edit', 'PostController@edit');
Route::get('/{blog}/posts/json', 'PostController@json');

Route::resource('/{blog}/posts', 'PostController');
Route::get('/{blog}/posts/create', 'PostController@create');
Route::get('/{blog}/posts/edit', 'PostController@edit');

Route::get('/{blog}', 'HomeController@posts');
Route::get('/', 'HomeController@overview');
Route::get('/{blog}/admin', 'Admin\PostController@index');
Route::get('/{blog}/{post}', 'PostController@show');

Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
Route::get('/{blog}/{category}/posts', 'CategoryController@posts');

Route::view('/snippets', 'TextExpander.create');
Route::post('/snippets/create', 'TextExpanderController@store');
Route::get('/snippets/index', 'TextExpanderController@index');
Route::get('snippets/json', 'TextExpanderController@json');

?>
