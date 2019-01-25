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

Route::get('/', 'SarController@index');

Route::get('/inicio', 'SarController@index');

Route::get('/nosotros', 'SarController@about');

Route::get('/ubicacion', 'SarController@location');

Route::get('/foro', 'SarController@forum');