<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 19/02/2019
 * Time: 03:10 PM
 */

namespace App\Http\Request;


use App\Models\Ponente;
use Illuminate\Foundation\Http\FormRequest;

class CreatePoeneteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Ponente::rules();
    }

    public function messages()
    {
        return Ponente::messages();
    }
}
