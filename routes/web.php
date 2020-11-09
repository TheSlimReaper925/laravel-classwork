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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addproducts', 'ProductsController@index')->name('addproducts');

Route::post('/storeproducts','ProductsController@store')->name('storeproducts');

Route::get('/updateproducts/{id}', 'ProductsController@edit')->name('updateProducts');

Route::post('/storeupdates', 'ProductsController@update')->name('storeupdates');

Route::get('/get_numbs', 'ProductsController@get_phone');

Route::get('/Posts', 'ProductsController@PostsWithComments');