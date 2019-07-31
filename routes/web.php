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
//list cats

Route::get('/cats', 'CatController@index')->name('list-cat');
//show form create cat
Route::get('/cats/create', 'CatController@create')->name('form-create-cat');
//store cat
Route::post('/cats', 'CatController@store')->name('store-cat');
//delete cat
Route::get('/cats/{id}', 'CatController@destroy')->name('delete-cat');
