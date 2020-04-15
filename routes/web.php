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
Route::get('/','CoronaController@index');
Route::post('/kirim','CoronaController@store');
Route::get('/data','CoronaController@data');
Route::get('/lapor','CoronaController@lapor');
