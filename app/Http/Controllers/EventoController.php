<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 16/03/2019
 * Time: 10:58 PM
 */

namespace App\Http\Controllers;


use App\Models\Evento;

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
}
