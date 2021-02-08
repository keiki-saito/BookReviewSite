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

Route::resource('user', 'UsersController', ['only' => [ 'show', 'edit','update']]);
Route::resource('review','ReviewsController',['only'=>['store']]);
Route::resource('bookmark','BookMarksController',['only'=>['store','destroy']]);

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('book/{book}','BooksController@show')->name('book.show');
});



