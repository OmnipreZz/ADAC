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




Auth::routes();


