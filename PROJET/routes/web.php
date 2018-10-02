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

// POST edit & update
Route::get('/post/edit/{id}','PostController@edit')->name('postEdit');
Route::post('/post/update/{id}','PostController@update')->name('postUpdate');

// POST create & store 
Route::get('post/create','PostController@create')->name('postCreate');
Route::post('post/store','PostController@store')->name('postStore');

// POST show
Route::get('post/show/{id}','PostController@show')->name('postShow');

// POST destroy
Route::get('post/destroy/{id}','PostController@destroy')->name('postDestroy');

// FAVORITE create & destroy
Route::get('/favorite/create/{id}','FavoriteController@store')->name('favoriteStore');
Route::get('/favorite/destroy/{id}','FavoriteController@destroy')->name('favoriteDestroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}', 'UserController@show')->name('user_show');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user_edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user_update');

Route::post('/user/delete/{id}', 'UserController@delete')->name('user_delete');
