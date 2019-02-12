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
use Hash;
use Illuminate\Http\Request;
use Mail;
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

    public function registerUserEmailPost(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required|email'],
            [
                'email.required' => 'Tu email es requerido.',
                'email.email' => 'Tu email no es válido.'
            ]
        );
        $validator->validate();

        $email = request('email');
        $user = new Usuario();
        $user->correo = $email;
        $user->save();
        try {
        } catch (\Throwable $e) {
            return back()
                ->withErrors(['general' => 'Ocurrio un error en el registro ' . " " . $e->getMessage()])
                ->withInput();
        }
        Mail::send('usuario._confirmation_registration', ["user" => $user], function ($message) use ($user) {
            $message->from('flisol@cisctoluca.com');
            $message->to($user->correo);
        });
    }

    public function fishRegistry(Request $request)
    {
        $userHash = $request->get('data', null);
        $userFind = null;
        foreach (Usuario::all() as $user) {
            if (Hash::check($user->correo, $userHash)) {
                $userFind = $user;
                break;
            }
        }
        return view('usuario.create', ["user" => $userFind]);
    }

    public function fishRegistryPost(Request $request)
    {
        $validationRules = [
            'nombre' => 'required|max:255',
            'app' => 'required|max:255',
            'apm' => 'required|max:255',
            'edad' => 'required|integer|max:99|min:10',
//            'correo' => 'required|email|unique:usuario,correo'
        ];
        $userId = $request->input('userId', 0);
        $fkIdInstituto = $request->input('fk_id_instituto', 0);
        $fkIdMunicipio = $request->input('fk_id_municipio', 0);
        $fkIdDiscapacidad = $request->input('fk_id_discapacidad', 0) * 1;
        $usuario = Usuario::find($userId);

        if ($fkIdMunicipio * 1 === 0) {
            $validationRules = array_merge(
                $validationRules,
                [
                    'fk_id_municipio' => 'integer|min:1',
                ]
            );
        }
        if ($fkIdInstituto * 1 === -2) {
            $validationRules = array_merge(
                $validationRules,
                [
                    'fk_id_instituto' => 'integer|min:1',
                ]
            );
        }
        if ($fkIdInstituto * 1 === -1) {
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
            'app.required' => 'Es necesario que ingreses tu apellido.',
            'app.max' => 'Ingresaste un apellido demaciado largo.',
            'apm.required' => 'Es necesario que ingreses tu apellido.',
            'apm.max' => 'Ingresaste un apellido demaciado largo.',
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

        if ($fkIdInstituto * 1 === -1) {
            $institute = new Institucion();
            $institute->fk_id_municipio = $fkIdMunicipio;
            $institute->nombre = $request->input('institucion.nombre');
            $institute->save();
        }


        $usuario->fill($request->all());

        if ($fkIdDiscapacidad !== 0) {
            $usuario->fk_id_discapacidad = $fkIdDiscapacidad;
        }

        if ($fkIdInstituto * 1 > 0) {
            $usuario->fk_id_institucion = $request->input('fk_id_instituto');
        } elseif ($fkIdInstituto * 1 === -1) {
            $usuario->fk_id_institucion = $institute->id;
        }

        try {
            $usuario->saveOrFail();
        } catch (\Throwable $e) {
            return back()
                ->withInput()
                ->withErrors(['general' => 'Ocurrio un error en el registro ' . " " . $e->getMessage()]);
        }

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
