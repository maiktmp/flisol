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
        $exist = $event->tieneUsuarios()->where("fk_id_usuario", $user->id)->exists();

        if ($exist) {
            return back()
                ->withInput()
                ->withErrors(["general" => "Ya te encuentras inscrito en el taller."]);
        }
        if ($event->inscritos >= 17) {
            return back()
                ->withErrors(["general" => "Lo sentimos el preregistro para este taller ha terminado, si aún deseas entrar asiste el día del evento para inscribirte al taller"]);
        }
        $event->inscritos = $event->inscritos++;
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
}
