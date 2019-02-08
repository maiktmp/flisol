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

Route::view('/', 'welcome');

/**
 *=======================================
 *          User Routes
 *=======================================
 */
Route::view('/user/registry', 'usuario.create')->name('registry');
Route::post('/user/registry', 'UsuarioController@usuarioCreatePost');

Route::get('/user/{userId}/QR',
    'UsuarioController@getQr')
    ->name('user_qr');

Route::get(
    '/user/registry/state/{stateId}/get_city',
    'UsuarioController@getMunicipioByEstado'
)->name('user_get_city_by_state');

Route::get(
    '/user/registry/city/{cityId}/get_institutes',
    'UsuarioController@getInstitucionByMunicipio'
)->name('user_get_institutes_by_state');
