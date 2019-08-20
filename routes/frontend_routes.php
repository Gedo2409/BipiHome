<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/buscar', ['uses' => 'FrontController@buscar', 'as' => 'front.buscar']);
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'front.index']);
Route::get('/precios', ['uses' => 'FrontController@precios', 'as' => 'front.precios']);
Route::get('/terminosycondiciones', ['uses' => 'FrontController@terminos', 'as' => 'front.terminos']);
Route::get('/contacto', ['uses' => 'FrontController@contacto', 'as' => 'front.contacto']);
Route::get('/acerca', ['uses' => 'FrontController@acerca', 'as' => 'front.acerca']);
Route::get('/proveedor/{id}', ['uses' => 'FrontController@proveedor', 'as' => 'front.proveedor']);
Route::get('/provider-info/{id}', ['uses' => 'FrontController@providerInfo', 'as' => 'front.provider.info']);
