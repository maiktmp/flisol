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

Route::view('/', 'welcome')->name("welcome");

/**
 *=======================================
 *          User Routes
 *=======================================
 */

Route::view('/user/registry/email',
    'usuario.register_mail')
    ->name('registry_email');

Route::post('/user/registry/email',
    'UsuarioController@registerUserEmailPost')
    ->name('registry_email_post');


Route::get('/user/finish_registry',
    'UsuarioController@fishRegistry')
    ->name('finish_registry');

Route::post('/user/finish_registry',
    'UsuarioController@fishRegistryPost')
    ->name('finish_registry_post');

Route::view('/user/registry',
    'usuario.create')
    ->name('registry');

Route::get('/user/{userId}/QR',
    'UsuarioController@getQr')
    ->name('user_qr');

Route::get('/user/{userId}/identified_card',
    'UsuarioController@printIdCard')
    ->name('user_identified_card');

Route::get(
    '/user/registry/state/{stateId}/get_city',
    'UsuarioController@getMunicipioByEstado'
)->name('user_get_city_by_state');

Route::get(
    '/user/registry/city/{cityId}/get_institutes',
    'UsuarioController@getInstitucionByMunicipio'
)->name('user_get_institutes_by_state');

/**
 *=======================================
 *          Ponentes Routes
 *=======================================
 */

Route::get(
    'ponente/index',
    "PonenteController@index"
)->name("ponente_index");

Route::get(
    'ponente/{ponenteId}/view',
    "PonenteController@viewPonente"
)->name("ponente_view");

/**
 *=======================================
 *          Sponsor Routes
 *=======================================
 */

Route::get(
    'patrocinador/get_all',
    "SponsorController@getAll"
)->name("sponsor_get_all");


/**
 *=======================================
 *          Eventos Routes
 *=======================================
 */

Route::view(
    'eventos/index',
    "evento.index"
)->name("event_index");

Route::get(
    'evetnto/get_all',
    'EventoController@getAllEvents'
)->name('get_all_events');

