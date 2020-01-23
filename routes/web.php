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

Route::get('/', 'ShowProfileController@index');

Route::get('/profile','ShowProfileController@profile');
Route::get('write_post','PostController@writePost')->name("write_post");

Route::post('add_post','PostController@addPost')->name("add_post");
Route::get('all_post','PostController@allPost')->name("all_post");

Route::get('view_post/{id}','PostController@viewPost');
Route::get('edit_post/{id}','PostController@editPost');
Route::post('update_post{id}','PostController@updatePost');
Route::get('delete_post/{id}','PostController@deletePost');