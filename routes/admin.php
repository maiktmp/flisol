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
 *          Ponente Routes
 *=======================================
 */
Route::get('/ponente/index',
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

/**
 *=======================================
 *          Patrocinador Routes
 *=======================================
 */
Route::get('/sponsort/index',
    'PatrocinadorController@index')
    ->name("index_patrocinador");

Route::view('/sponsort/create',
    'admin.patrocinador.create')
    ->name('sponsort_create');

Route::post('/sponsort/create',
    'PatrocinadorController@createPost')
    ->name('sponsort_create_post');

Route::get('/sponsort/{sponsortId}/update',
    'PatrocinadorController@update')
    ->name("sponsort_update");

Route::post('/sponsort/{sponsortId}/update',
    'PatrocinadorController@updatePost')
    ->name("sponsort_update_post");


/**
 *=======================================
 *          Evento Routes
 *=======================================
 */
Route::get('/event/index',
    'EventoController@index')
    ->name("index_event");

Route::view('/event/create',
    'admin.event.create')
    ->name('event_create');

Route::post('/event/create',
    'EventoController@createPost')
    ->name('event_create_post');

Route::get('/event/{eventId}/update',
    'EventoController@update')
    ->name("event_update");

Route::post('/event/{eventId}/update',
    'EventoController@updatePost')
    ->name("event_update_post");





