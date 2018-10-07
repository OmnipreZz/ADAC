<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home page
Route::get('/', 'PostController@index' )->name('postIndex');

// POST create & store 
Route::get('post/create','PostController@create')->name('postCreate');
Route::post('post/create/{catId}','PostController@createWithCat')->name('postCreateWithCat');
Route::post('post/store','PostController@store')->name('postStore');

// POST edit & update
Route::get('/post/edit/{id}','PostController@edit')->name('postEdit');
Route::post('/post/update/{id}','PostController@update')->name('postUpdate');

// POST show
Route::get('post/show/{id}','PostController@show')->name('postShow');

// POST destroy
Route::get('post/destroy/{id}','PostController@destroy')->name('postDestroy');

// POST show favorite
Route::get('post/favorites','PostController@myfavorites')->name('postFavorites');
Route::get('post/myposts','PostController@myposts')->name('postMyPosts');

// POST search
Route::post('post/search','PostController@search')->name('postSearch');

// FILE download
Route::get('post/download/{filename}','PostController@downloadfile')->name('fileDownload');

// FAVORITE store & destroy
Route::get('/favorite/store/{id}','FavoriteController@store')->name('favoriteStore');
Route::get('/favorite/destroy/{id}','FavoriteController@destroy')->name('favoriteDestroy');

// COMMENT store & destroy
Route::post('/comment/store/{id}','CommentController@store')->name('commentStore');
Route::get('/comment/destroy/{id}','CommentController@destroy')->name('commentDestroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes concernant la gestion des utilisateurs
Route::get('/users', 'UserController@index')->name('user_index');
Route::get('/user/{id}', 'UserController@show')->name('user_show');

Route::get('/usercreate', 'UserController@create')->name('user_create');
Route::post('/userstore', 'UserController@store')->name('user_store');

Route::get('/user/edit/{id}', 'UserController@edit')->name('user_edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user_update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user_delete');

// Routes concernant la gestion des catégories
Route::get('/categories', 'CategoryController@index')->name('category_index');
Route::get('/category/{id}', 'CategoryController@show')->name('category_show');
Route::get('/categories/create', 'CategoryController@create')->name('category_create');
Route::post('/categories/store', 'CategoryController@store')->name('category_store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category_edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category_update');
Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category_destroy');

// Routes concernant la gestion des sous catégories
Route::get('/subcategories/posts/{id}', 'SubcategoryController@posts_from')->name('posts_from');
Route::get('/subcategories', 'SubcategoryController@index')->name('subcategory_index');
Route::get('/subcategories/{id}', 'SubcategoryController@show')->name('subcategory_show');

Route::get('/subcategory/create', 'SubcategoryController@create')->name('subcategory_create');
Route::post('/subcategories/store', 'SubcategoryController@store')->name('subcategory_store');
