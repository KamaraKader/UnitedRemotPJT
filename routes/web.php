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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/shops/{shop}/favourites', 'ShopController@store')->name('shops.fav.store');
Route::get('/shops/favourites', 'ShopController@index')->name('shops.fav');
Route::delete('/shop/{product}/favourites', 'ShopController@destroy')->name('shops.fav.destroy');
