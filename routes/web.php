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


Route::get('/','BooksController@index')->name('book.index');
Route::resource('book', 'BooksController', ['only' => [ 'show', 'create', 'store','edit','update','destroy']]);
Route::get('/users/{user_id}', 'UsersController@show');
Route::resource('review','ReviewsController',['only'=>['store']]);
Route::resource('bookmark','BookMarksController',['only'=>['store','destroy']]);

Auth::routes();


