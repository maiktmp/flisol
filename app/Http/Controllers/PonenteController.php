<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 21/02/2019
 * Time: 11:34 AM
 */

namespace App\Http\Controllers;


use App\Models\Ponente;

class PonenteController extends Controller
{
    public function index(){
        $ponentes = Ponente::all();
        return view("ponente.index",["ponentes"=>$ponentes]);
    }
}