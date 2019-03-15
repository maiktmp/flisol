<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 21/02/2019
 * Time: 09:25 PM
 */

namespace App\Http\Request;


use App\Models\Evento;
use App\Models\Patrocinador;
use Illuminate\Foundation\Http\FormRequest;

class CreateEventoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return Evento::messages();
    }

    public function rules()
    {
        return Evento::rules();
    }

}
