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
    return view('layout');
});

Route::get('createStore','StoreController@create');
Route::post('createStore','StoreController@store');


Route::get('viewStores','StoreController@index');
Route::get('viewStores/{storeID}','StoreController@show');

Route::get('updateStore/{storeID}/edit' , 'StoreController@edit');
Route::patch('updateStore/{storeID}','StoreController@update');
