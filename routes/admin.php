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




/**
*=======================================
*          Admin Routes
*=======================================
*/

/**
*=======================================
*          Ponente Routes
*=======================================
*/
Route::get('/',
'PonenteController@index')
->name("index_ponente");

Route::view('/ponente/create',
'admin.ponente.create')
->name('ponente_create');

Route::post('/ponente/create',
'PonenteController@createPost')
->name('ponente_create_post');

Route::get('/ponente/{ponenteId}/update',
'PonenteController@update')
->name("ponente_update");

Route::post('/ponente/{ponenteId}/update',
'PonenteController@updatePost')
->name("ponente_update_post");





