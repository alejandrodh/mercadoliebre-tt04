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

Route::get('/products', 'ProductController@index'); //Listamos productos
Route::get('/product/{id}', 'ProductController@show'); //Mostramos 1 producto
Route::post('/addtocart', 'CartController@store'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy'); //Borramos productos del carrito.
Route::get('/cart', 'CartController@index'); //Mostramos el carrito abierto.
