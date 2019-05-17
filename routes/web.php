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

Route::prefix('category')->group(function (){
    Route::get('/', 'CategoryController@show')->name('category.show');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('/create', 'CategoryController@store')->name('category.store');
    Route::get('/delete{id}', 'CategoryController@delete')->name('category.delete');
    Route::get('/update{id}', 'CategoryController@update')->name('category.update');
    Route::post('/update{id}', 'CategoryController@edit')->name('category.edit');
});

Route::prefix('list/books')->group(function (){
    Route::get('/', 'BookController@show')->name('book.show');
    Route::get('/create', 'BookController@create')->name('book.create');
    Route::post('/create', 'BookController@store')->name('book.store');
    Route::get('/delete/{id}', 'BookController@destroy')->name('book.destroy');
    Route::get('/update/{id}', 'BookController@update')->name('book.update');
    Route::post('/update/{id}', 'BookController@edit')->name('book.edit');
});
