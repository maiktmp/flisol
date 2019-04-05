<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 04/04/2019
 * Time: 10:14 PM
 */

namespace App\Console\Commands;

use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckGroups extends Command
{
    protected $signature = "work:check_groups";
    protected $description = 'Verificar que el usuario ingrese a el taller';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();
//        $now = Carbon::create(2019, 04, 05, 10, 55, 00);
        $eventos = Evento::where('hora_inicio', $now)->get();
        foreach ($eventos as $evento) {
            $usuarios = $evento->tieneUsuarios;
            foreach ($usuarios as $usuario) {
                if ($usuario->pivot->asistencia === 0) {
                    $evento->tieneUsuarios()->detach($usuario->id);
                    $capacidad = $evento->inscritos;
                    $capacidad = $capacidad - 1;
                    $evento->inscritos = $capacidad;
                    $evento->save();
                };
            }
        }
    }
}
