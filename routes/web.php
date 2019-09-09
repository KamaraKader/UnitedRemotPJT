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
// get all store in the main page
Route::get('/', 'HomeController@index')->name('home');

// route for store the
Route::post('/shops/{shop}/favourites', 'ShopController@store')->name('shops.fav.store');

//route for get the list of shop liked by an user
Route::get('/shops/favourites', 'ShopController@index')->name('shops.fav');

//route for remove a shop from the list
Route::delete('/shop/{product}/favourites', 'ShopController@destroy')->name('shops.fav.destroy');
