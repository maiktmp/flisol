<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 01:28 PM
 */

namespace App\Http\Controllers;


use App;
use App\Models\Institucion;
use App\Models\Municipio;
use App\Models\Usuario;
use DB;
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
            ['email' => 'required|email|unique:usuario,correo'],
            [
                'email.required' => 'Tu email es requerido.',
                'email.email' => 'Tu email no es válido.',
                'email.unique' => 'El correo ya ha sido registrado anteriormente.',
            ]
        );
        $validator->validate();

        $email = request('email');
        $user = new Usuario();
        $user->correo = $email;
        $user->hash = bcrypt($user->correo);
        $user->save();
        try {
        } catch (\Throwable $e) {
            return back()
                ->withErrors(['general' => 'Ocurrio un error en el registro ' . " " . $e->getMessage()])
                ->withInput();
        }
        Mail::send('usuario._confirmation_registration', ["user" => $user], function ($message) use ($user) {
            $message->from('flisol@cisctoluca.com', 'FLISoL');
            $message->subject('Confirmación de correo.');
            $message->to($user->correo);
        });
        return back()->withErrors([
            "sendMail" => "Se ha enviado un correo a " . $user->correo . " por favor completa tu registro."
        ]);
    }

    public function recoveryMail(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required|email|exists:usuario,correo'],
            [
                'email.required' => 'Tu email es requerido.',
                'email.email' => 'Tu email no es válido.',
                'email.exists' => 'Tu email aún no ha sido registrado.',
            ]
        );
        $validator->validate();
        $email = request('email');
        $user = Usuario::whereCorreo($email)->first();

        try {
        } catch (\Throwable $e) {
            return back()
                ->withErrors(['general' => 'Ocurrio un error en el registro ' . " " . $e->getMessage()])
                ->withInput();
        }
        Mail::send('usuario._confirmation_registration', ["user" => $user], function ($message) use ($user) {
            $message->from('flisol@cisctoluca.com', 'FLISoL');
            $message->subject('Confirmación de correo.');
            $message->to($user->correo);
        });
        return back()->withErrors([
            "sendMail" => "Se ha enviado un correo a " . $user->correo . " por favor completa tu registro."
        ]);
    }

    public function recoveryQR(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required|email|exists:usuario,correo'],
            [
                'email.required' => 'Tu email es requerido.',
                'email.email' => 'Tu email no es válido.',
                'email.exists' => 'Tu email aún no ha sido registrado.',
            ]
        );
        $validator->validate();
        $email = request('email');
        $user = Usuario::whereCorreo($email)->first();
        if ($user->QR_url === null) {
            Mail::send('usuario._confirmation_registration', ["user" => $user], function ($message) use ($user) {
                $message->from('flisol@cisctoluca.com', 'FLISoL');
                $message->subject('Confirmación de correo.');
                $message->to($user->correo);
            });
            return back()->withErrors([
                "sendMail" => "Se ha enviado un correo a " . $user->correo . " por favor antes completa tu registro."
            ]);
        } else {
            $code = $user->QR;
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('usuario._gafete_view', ["usuario" => $user]);
            $render = $pdf->output();
            Mail::send('usuario._email_gafete', [], function ($message) use ($render, $user, $code) {
                $message->from('flisol@cisctoluca.com', 'FLISoL');
                $message->subject('Gafete FLISoL.');
                $message->to($user->correo);
                $message->attachData($render, $code . ".pdf");
            });
            return back()->withErrors([
                "sendMail" => "Se ha enviado el gafete a el correo de " . $user->correo . "."]);
        }
        try {
        } catch (\Throwable $e) {
            return back()
                ->withErrors(['general' => 'Ocurrio un error al recuperar el correo ' . " " . $e->getMessage()])
                ->withInput();
        }
    }

    public function fishRegistry(Request $request)
    {
        $userHash = $request->get('data', null);
        $userFind = Usuario::whereHash($userHash)->first();
        return view('usuario.create', ["user" => $userFind]);
    }

    public function fishRegistryPost(Request $request)
    {
        $validationRules = [
            'nombre' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'app' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'apm' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'fechaNac' => 'required|date|before:now',
//            'correo' => 'required|email|unique:usuario,correo'
        ];
        $userId = $request->input('userId', 0);
        $fkIdInstituto = $request->input('fk_id_instituto', 0);
        $fkIdMunicipio = $request->input('fk_id_municipio', 0);
        $fkIdDiscapacidad = $request->input('fk_id_discapacidad', 0) * 1;
        $usuario = Usuario::find($userId);

        $isSendingEmail = $usuario->QR_url === null;

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
            'nombre.regex' => 'Solo se permiten letras.',
            'app.required' => 'Es necesario que ingreses tu apellido.',
            'app.max' => 'Ingresaste un apellido demaciado largo.',
            'app.regex' => 'Solo se permiten letras.',
            'apm.required' => 'Es necesario que ingreses tu apellido.',
            'apm.max' => 'Ingresaste un apellido demaciado largo.',
            'apm.regex' => 'Solo se permiten letras.',
            'fechaNac.required' => 'Ingresa tu fecha de nacimiento..',
            'fechaNac.date' => 'Ingresa un formato válido de fecha.',
            'fechaNac.before' => 'Ingresa una fecha válida.',
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
            DB::beginTransaction();
            $usuario->save();
            $code = $usuario->id . "-" . time();

            $url = "/img/QR/" . $code . ".png";
            QrCode::format('png')
                ->size(1000)
                ->generate($code, public_path() . $url);

            $usuario->QR = $code;
            $usuario->QR_url = $url;

            if ($usuario->save()) {
                DB::commit();
                if ($isSendingEmail) {
                    $pdf = App::make('dompdf.wrapper');
                    $pdf->loadView('usuario._gafete_view', ["usuario" => $usuario]);
                    $render = $pdf->output();
                    \Storage::put("/gafetes/" . $code . ".pdf", $render);
                    Mail::send('usuario._email_gafete', [], function ($message) use ($render, $usuario, $code) {
                        $message->from('flisol@cisctoluca.com', 'FLISoL');
                        $message->subject('Gafete FLISoL.');
                        $message->to($usuario->correo);
                        $message->attachData($render, $code . ".pdf");
                    });
                }
                return redirect()->route('user_qr', ['userId' => $usuario->id]);
            } else {
                DB::rollBack();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->withErrors(['general' => 'Ocurrio un error en el registro ' . " " . $e->getMessage()]);
        }
    }

    public function getQr($userId)
    {
        $user = Usuario::find($userId);
        return view('usuario.view_qr', ["usuario" => $user]);
    }

    public function printIdCard($userId)
    {
        $user = Usuario::find($userId);
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadView('usuario._gafete_view', ["usuario" => $user]);
//        return $pdf->stream("gafeteFlisol.pdf");
//        return $pdf->download("gafeteFlisol.pdf");
        return \Storage::download("/gafetes/" . $user->QR . ".pdf");
    }
}
