<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 01:28 PM
 */

namespace App\Http\Controllers;


use App\Models\Institucion;
use App\Models\Municipio;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Validator;

class UsuarioController extends Controller
{

    public function getMunicipioByEstado($estadoId)
    {
        $cities = Municipio::whereFkIdEstado($estadoId)->get();
        return response()->json($cities);
    }

    public function getInstitucionByMunicipio($municipioId)
    {
        $institutes = Institucion::whereFkIdMunicipio($municipioId)
            ->get();
        return response()->json($institutes);
    }

    public function usuarioCreatePost(Request $request)
    {
        $validationRules = [
            'nombre' => 'required|max:255',
            'edad' => 'required|integer|max:99|min:10',
//            'correo' => 'required|email|unique:usuario,correo'
        ];

        if ($request->input('fk_id_municipio', 0) * 1 === 0) {
            $validationRules = array_merge(
                $validationRules,
                [
                    'fk_id_municipio' => 'integer|min:1',
                ]
            );
        }
        if ($request->input('fk_id_instituto', 0) * 1 === -2) {
            $validationRules = array_merge(
                $validationRules,
                [
                    'fk_id_instituto' => 'integer|min:1',
                ]
            );
        }
        if ($request->input('fk_id_instituto', 0) * 1 === -1) {
            $validationRules = array_merge(
                $validationRules,
                [
                    'institucion.nombre' => 'required',
                ]
            );
        }
        $validationMessages = [
            'nombre.required' => 'Es necesario que ingreses tu nombre.',
            'nombre.max' => 'Ingresaste un nombre demaciado largo.',
            'edad.required' => 'Es necesario que ingreses tu edad.',
            'edad.integer' => 'Tu edad debe ser un valor entero.',
            'edad.max' => 'Eres demaciado viejo para asistir.',
            'edad.min' => 'Eres demaciado joven para asistir.',
            'correo.required' => 'Es necesario que ingreses tu correo.',
            'correo.email' => 'Ingresa un correo válido.',
            'correo.unique' => 'El correo ingresado ya se encuentra registrado.',
            'fk_id_municipio.min' => 'Es necesario que indiques el lugar de donde vienes.',
            'fk_id_instituto.min' => 'Es necesario que indiques el lugar de donde vienes.',
            'institucion.nombre.required' => 'El nombre de la institución es requerido',
        ];
//        return dd($validationRules);
        $validator = Validator::make(
            $request->all(),
            $validationRules,
            $validationMessages
        );
//        return dd($validator->errors());

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        if ($request->input('fk_id_instituto', 0) * 1 === -1) {
            $institute = new Institucion();
            $institute->fk_id_municipio = $request->input('fk_id_municipio');
            $institute->nombre = $request->input('institucion.nombre');
            $institute->save();
        }
        $usuario = new Usuario();
        $usuario->fill($request->all());
        if ($request->input('fk_id_instituto', 0) * 1 > 0) {
            $usuario->fk_id_institucion = $request->input('fk_id_instituto');
        } elseif ($request->input('fk_id_instituto', 0) * 1 === -1) {
            $usuario->fk_id_institucion = $institute->id;
        }
        $usuario->save();

        $code = $usuario->id . "-" . time();
        $url = public_path() . "\img/QR/" . $code . ".png";
        QrCode::format('png')
            ->size(1000)
            ->generate($code, $url);

        $usuario->QR = $code;
        $usuario->QR_url = $url;
        if ($usuario->save()) {
            return redirect()->route('user_qr', ['userId' => $usuario->id]);
        }

    }

    public function getQr($userId)
    {
        $user = Usuario::find($userId);
        return view('usuario.view_qr', ["usuario" => $user]);
    }
}
