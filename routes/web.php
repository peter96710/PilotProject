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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'web'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/rooms/index', 'RoomsController@index')->name('roomsindex');
    Route::get('/books/index', 'BooksController@index')->name('booksindex');
    Route::get('/books/listing', 'BooksController@listing')->name('bookslisting');
    Route::get('/books/store', 'BooksController@store')->name('booksstore');
    Route::get('/rooms/store', 'RoomsController@store')->name('roomsstore');
    Route::get('/books/destroy/{books}', 'BooksController@destroy');


    Route::get('/admin/destroy/{rooms}', 'AdminController@destroy')->middleware('role:Admin');
    Route::get('/admin', 'AdminController@index')->name('admin')->middleware('role:Admin');
    Route::get('/admin/list', 'AdminController@list')->name('roomslist')->middleware('role:Admin');
    Route::get('/admin/edit/{rooms}', 'AdminController@edit')->name('roomsedit')->middleware('role:Admin');
    Route::get('/admin/edit/update/{rooms}', 'AdminController@update')->name('adminupdate')->middleware('role:Admin');
});
