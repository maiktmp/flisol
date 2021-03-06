<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 16/03/2019
 * Time: 10:58 PM
 */

namespace App\Http\Controllers;


use App\Models\Evento;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Validator;

class EventoController extends Controller
{
    public function getAllEvents()
    {
        $events = Evento::orderBy('hora_inicio', 'ASC')
            ->with([
                "tienePonentes",
                "tipoEvento",
                "ubicacion",
            ])
            ->get();
        return response()->json($events);
    }

    public function getDetails($eventId)
    {
        $event = Evento::find($eventId);
        $event->tienePonentes;
        $event->tipoEvento;
        $event->ubicacion;
        return response()->json($event);
    }

    public function logInWorkShop($workShopId)
    {
        $event = Evento::find($workShopId);
        return view('evento.login_workshop', ["event" => $event]);
    }

    public function logInWorkShopPost($workShopId, Request $request)
    {
        $event = Evento::find($workShopId);
        $user = Usuario::whereCorreo($request->input("email", null))->first();
        if ($user === null) {
            return back()
                ->withInput()
                ->withErrors(["general" => "El email que ingresaste no se encuentra registrado, por favor realiza el registro previo"]);
        }
        if ($user->QR_url === null) {
            return back()
                ->withInput()
                ->withErrors(["general" => "Lo sentimos aun no has concluido tu registro por correo."]);
        }
        $exist = $event->tieneUsuarios()->where("fk_id_usuario", $user->id)->exists();
        if ($exist) {
            return back()
                ->withInput()
                ->withErrors(["general" => "Ya te encuentras inscrito en el taller."]);
        }
        if ($event->inscritos >= 22) {
            return back()
                ->withErrors(["general" => "Lo sentimos el preregistro para este taller ha terminado, si aún deseas entrar asiste el día del evento para inscribirte al taller"]);
        }
        $inscritos = $event->inscritos;
        $inscritos++;
        $event->inscritos = $inscritos;
        $event->tieneUsuarios()->attach($user->id);
        if ($event->save()) {
            return back()
                ->withErrors(["success" => "!Listo, ya te encuentras inscrito al taller!"]);
        } else {
            return back()
                ->withInput()
                ->withErrors(["general" => "Ocurrio un error, por favor intenta más tarde."]);
        }
    }

    public function previousRegistrationPost(Request $request)
    {
        $email = request('email');
        $qr = $request->get('Qr');
        $eventId = $request->get('fk_id_event');

        $user = Usuario::whereCorreo($email)->first();
        if ($user === null) {
            $user = Usuario::where("QR", $qr)->first();
        }

        if ($user === null) {
            return back()->withInput()->withErrors(["general" => "No se encuentra el usuario, verifica sus datos por favor"]);
        };
        $event = Evento::find($eventId);
        $event->tieneUsuarios()->attach($user->id, ['asistencia' => true]);
        return back()->withInput()->withErrors(["success" => "Usuario " . " " . $user->full_name . " registrado."]);
    }

}
