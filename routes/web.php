<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/products', 'App\Http\Controllers\ProductController@index');

/* --------- non-MVC pattern ----------- */
Route::get('/cart', function(){
    return view('store.cart');
});
Route::get('/item', function(){
    return view('store.item');
});
Route::get('/shop', function(){
    return view('store.shop');
});
