<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 21/02/2019
 * Time: 11:34 AM
 */

namespace App\Http\Controllers;


use App\Http\GenericResponse;
use App\Models\Ponente;

class PonenteController extends Controller
{
    public function index()
    {
        $ponentes = Ponente::all();
        return view("ponente.index", ["ponentes" => $ponentes]);
    }

    public function viewPonente($ponenteId)
    {
        $ponente = Ponente::find($ponenteId);
        $gr = new GenericResponse();
        if ($ponente === null) {
            $gr->message = "No se encontró el ponente";
        } else {
            $ponente->patrocinador;
            $gr->message = "Se encontró el ponente";
            $gr->success = true;
            $gr->data = $ponente;
        }
        return response()->json($gr);
    }
}
