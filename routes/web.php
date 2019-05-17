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



Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/create', 'UserController@create')->name('users.create');
    Route::post('/create', 'UserController@store')->name('users.store');
    Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('/{id}/edit', 'UserController@update')->name('users.update');
    Route::get('/{id}/delete', 'UserController@delete')->name('users.delete');

});

Route::prefix('category')->group(function (){
    Route::get('/', 'CategoryController@show')->name('category.show');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('/create', 'CategoryController@store')->name('category.store');
<<<<<<< HEAD
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
=======

>>>>>>> 084a9589f8fed9c4c474fa8540aabe9eb7f3bb45
});

Route::get('/', 'LoginController@index')->name('index');
Route::get('/login', 'LoginController@getLogin')->name('login');
Route::post('/login', 'LoginController@postLogin')->name('loginUSer');

Route::group(['prefix' => 'roles'], function () {
    Route::get('/', 'RoleController@index')->name('roles.index');
    Route::get('/edit', 'RoleController@create')->name('roles.create');
    Route::post('/edit', 'RoleController@store')->name('roles.store');
    Route::get('/{id}/delete', 'RoleController@delete')->name('roles.delete');
});



