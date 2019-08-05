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


Route::get('/cats', 'CatController@index')->name('list-cat');
//show form create cat

//store cat
Route::post('/cats', 'CatController@store')->name('store-cat');
//delete cat
Route::get('/cats/{id}', 'CatController@destroy')->name('delete-cat');
//edit Cat
Route::get('/cats/{id}/edit', 'CatController@edit')->name('edit-cat');
//update cat
Route::put('/cats/{id}', 'CatController@update')->name('update-cat');

//list all post of country
Route::get('/countries/{id}/posts', 'CountryController@listPostByCountryId')->name('list-post-of-country');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
	'prefix' => 'admin',
	'middleware' => ['isAdmin'],
	// 'namespace' => 'Admin',
	// 'as' => 'admin.'
] , function(){
	//list cats
	Route::get('/cats/create', 'CatController@create')->name('form-create-cat');
	// show breed
	Route::get('/breeds/{id}', 'BreedController@show')->name('show-breed');
});
