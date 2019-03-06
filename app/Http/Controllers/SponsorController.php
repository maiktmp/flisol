<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 06/03/2019
 * Time: 02:21 PM
 */

namespace App\Http\Controllers;


use App\Http\GenericResponse;
use App\Models\Patrocinador;

class SponsorController extends Controller
{

    public function getAll()
    {
        $gr = new GenericResponse();
        $gr->success = true;
        $gr->data = Patrocinador::all();
        return response()->json($gr);
    }

}
