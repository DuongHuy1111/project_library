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

Route::get('/', 'LoginController@index')->name('index');
Route::get('/login', 'LoginController@getLogin')->name('login');
Route::post('/login', 'LoginController@postLogin')->name('loginUSer');

Route::group(['prefix' => 'roles'], function () {
    Route::get('/', 'RoleController@index')->name('roles.index');
    Route::get('/edit', 'RoleController@create')->name('roles.create');
    Route::post('/edit', 'RoleController@store')->name('roles.store');
    Route::get('/{id}/delete', 'RoleController@delete')->name('roles.delete');
});