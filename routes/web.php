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
});
