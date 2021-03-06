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

use App\Models\Evento;
use Carbon\Carbon;

Route::view('/', 'welcome')->name("welcome");

Route::view('admin/login', 'admin.login')
    ->name('login');

Route::post('admin/login',
    'Auth\LoginController@authenticate')
    ->name('login_auth');

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

Route::view('/user/recovery/email',
    'usuario.recovery_mail')
    ->name('recovery_email');

Route::post('/user/recovery/email',
    'UsuarioController@recoveryMail')
    ->name('recovery_email_post');


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


Route::view('/user/recovery_qr',
    'usuario.recovery_qr')
    ->name('recovery_QR');

Route::post('/user/recovery_qr',
    'UsuarioController@recoveryQR')
    ->name('recovery_QR_post');

Route::get('/user/config/email',
    'UsuarioController@configUsers')
    ->name('recovery_QR_post');

Route::view("user/event/registry",
    'usuario.second_form')
    ->name("user_second_form");

Route::post("user/event/registry",
    'UsuarioController@secondFormPost')
    ->name("user_second_form_post");

Route::view("user/print/badge",
    'usuario.recovery_badge')
    ->name("recovery_badge");

Route::post("user/print/badge",
    'UsuarioController@recoveryBadge')
    ->name("recovery_badge_post");


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
    'evento/get_all',
    'EventoController@getAllEvents'
)->name('get_all_events');

Route::get(
    'evento/{eventId}/login',
    'EventoController@logInWorkShop'
)->name('login_event');

Route::post(
    'evento/{eventId}/login',
    'EventoController@logInWorkShopPost'
)->name('login_event_post');


Route::view(
    'flisol/previous/registration',
    'evento.register_event'
)->name('login_previous_register');

Route::post(
    'flisol/previous/registration',
    'EventoController@previousRegistrationPost'
)->name('login_previous_register_post');


//Route::get(
//    'cron',
//    function () {
////        $now = Carbon::create(2019, 04, 05, 10, 55, 00);
//        $now = Carbon::now();
//        return dd(Carbon::now());
//        $eventos = Evento::where('hora_inicio', $now->addMinute(5))->get();
//        foreach ($eventos as $evento) {
//            $usuarios = $evento->tieneUsuarios;
//            foreach ($usuarios as $usuario) {
//                if ($usuario->pivot->asistencia === 0) {
//                    $evento->tieneUsuarios()->detach($usuario->id);
//                };
//            }
//        }
//    }
//)->name('login_event');
