<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 14/03/2019
 * Time: 05:42 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Request\CreateEventoRequest;
use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('admin.event.index', ["eventos" => $eventos]);
    }

    /**
     * @param CreateEventoRequest $request
     * @return \Illuminate\Http\RedirectResponse|void
     *
     */
    public function createPost(CreateEventoRequest $request)
    {
        $evento = new Evento();
        try {
            $evento->fill($request->all());
            $hour = new Carbon("2019-04-05 " . $request->input("hora_inicio"));
            $long = $request->input("duracion");
            $evento->hora_inicio = $hour;
            $evento->duracion = $long;
            $evento->saveOrFail();
            $evento->tienePonentes()->sync($request->input("fk_id_ponente"));
            return redirect()->route("index_event");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al actualizar el evento" . " " . $e->getMessage()])
                ->withInput();
        }
    }

    public function update($eventId)
    {
        $event = Evento::find($eventId);
        return view('admin.event.update', ["event" => $event]);
    }

    public function updatePost(CreateEventoRequest $request, $eventId)
    {
        $evento = Evento::find($eventId);
        try {
            $evento->fill($request->all());
            $hour = new Carbon("2019-04-05 " . $request->input("hora_inicio"));
            $long = $request->input("duracion");
            $evento->hora_inicio = $hour;
            $evento->duracion = $long;
            $evento->saveOrFail();
            $evento->tienePonentes()->sync($request->input("fk_id_ponente"));
            return redirect()->route("index_event");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al actualizar el evento" . " " . $e->getMessage()])
                ->withInput();
        }
    }

    public function createHours($time)
    {
        $hours = 0;
        $seconds = "00";
        while ($time >= 60) {
            $hours++;
            $time = $time - 60;
        }
        $minutes = $time;
        if ($hours < 10) {
            $hours = "0" . $hours;
        }
        if ($minutes < 10) {
            $minutes = "0" . $minutes;
        }
        return $hours . ":" . $minutes . ":" . $seconds;
    }

}


