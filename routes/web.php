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
/*Shopify api wrapper*/
Route::get('/oauth/authorize', 'ShopifyController@getResponse');
Route::get('/shopify', 'ShopifyController@getPermission');