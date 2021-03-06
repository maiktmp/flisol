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
use foo\bar;
use Hash;
use http\Client\Curl\User;
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
        $user->hash = bcrypt($email);
        $user->save();
//        return back()->withErrors([
//            "warning" => "Gracias por tu interes en el evento por el momento estamos renovando el
//             sitio, tu correo ha sido registrado satisfactoriamente, proximamente se te notificará a
//              tu correo para concluir el registro."
//        ]);
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
        if ($user->hash === null) {
            $user->hash = bcrypt($email);
            $user->save();
        }
//        return back()->withErrors([
//            "warning" => "Gracias por tu interes en el evento por el momento estamos renovando el
//             sitio, tu correo ha sido registrado satisfactoriamente, proximamente se te notificará a
//              tu correo para concluir el registro."
//        ]);
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
        /**
         * TODO PRE-REGISTRO PERSONALIZADO
         *
         */
        if ($user->correo === "zuro.cortez@gmail.com") {
            try {
                DB::beginTransaction();
                $user->save();
                $code = $user->id . "-" . time();
                $url = "/img/QR/" . $code . ".png";
                QrCode::format('png')
                    ->size(1000)
                    ->generate($code, public_path() . $url);
                $user->QR = $code;
                $user->QR_url = $url;
                if ($user->save()) {
                    DB::commit();
                    $pdf = App::make('dompdf.wrapper');
                    $pdf->loadView('usuario._gafete_view', ["usuario" => $user]);
                    $render = $pdf->output();
                    \Storage::put("/gafetes/" . $code . ".pdf", $render);
                    Mail::send('usuario._email_gafete', [], function ($message) use ($render, $user, $code) {
                        $message->from('flisol@cisctoluca.com', 'FLISoL');
                        $message->Bcc('maiktmp@gmail.com', 'maik');
                        $message->subject('Gafete FLISoL.');
                        $message->to($user->correo);
                        $message->attachData($render, $code . ".pdf");
                    });
                    return redirect()->route('user_qr', ['userId' => $user->id]);
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
//        $userFind = null;
//        $users = Usuario::whereNull("QR_url")->get();
//        $filter = $users->filter(function ($user) use ($userHash) {
//            if (Hash::check($user->correo, $userHash)) {
//                return true;
//            }
//        });
        //$filter->first()
        $user = Usuario::whereHash($userHash)->first();
        return view('usuario.create', ["user" => $user]);
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

    public function configUsers()
    {
        $users = Usuario::whereNull("QR_url")
//            ->whereNull("hash")
            ->get();
        $exceptions = [];
//        return dd($users->count());
        foreach ($users as $user) {
//            $hash = bcrypt($user->correo);
//            $user->hash = $hash;
            try {
                Mail::send('usuario._confirmation_registration', ["user" => $user], function ($message) use ($user) {
                    $message->from('flisol@cisctoluca.com', 'FLISoL');
                    $message->Bcc('ciscittol@gmail.com', 'CISC');
                    $message->subject('Correo de registro para el FLISoL.');
                    $message->to($user->correo);
                });
//                $user->save();
            } catch (\Exception $e) {
                $exceptions[] = [$user => $e];
                return dd($e);
            }
        }
        return dd($exceptions);
    }

    public function secondFormPost(Request $request)
    {
        $validationRules = [
            'nombre' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'app' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'apm' => 'required|max:255|regex:/^[\pL\pM\p{Zs}.-]+$/u',
            'correo' => 'required|email|unique:usuario,correo'
        ];

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
            'correo.required' => 'Es necesario que ingreses tu correo.',
            'correo.email' => 'Ingresa un correo válido.',
            'correo.unique' => 'El correo ingresado ya se encuentra registrado.',
        ];
        $validator = Validator::make(
            $request->all(),
            $validationRules,
            $validationMessages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $usuario = new Usuario();
        $usuario->fill($request->all());
        try {
            $usuario->saveOrFail();
            $code = $usuario->id . "-" . time();

            $url = "/img/QR/" . $code . ".png";
            QrCode::format('png')
                ->size(1000)
                ->generate($code, public_path() . $url);

            $usuario->QR = $code;
            $usuario->QR_url = $url;

            if ($usuario->saveOrFail()) {
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
                return redirect()
                    ->route('user_qr', ['userId' => $usuario->id]);
            }
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["general" => "Ocurrio un error al crear el usuario", " ", $e->getMessage()]);
        }

    }

    public function recoveryBadge(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required|email|exists:usuario,correo'],
            [
                'email.required' => 'El email es requerido.',
                'email.email' => 'El email no es válido.',
                'email.exists' => 'El email aún no ha sido registrado.',
            ]
        );
        $validator->validate();
        $email = $request->input('email');
        $user = Usuario::whereCorreo($email)->first();
        if ($user->QR_url === null) {
            return back()->withInput()->withErrors(["general" => "El usuario no concluyo su registro"]);
        }
        return view('usuario.recovery_badge', ["user" => $user]);
    }
}
