<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 21/02/2019
 * Time: 01:24 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Request\CreatePatrocinadorRequest;
use App\Http\Request\CreatePoeneteRequest;
use App\Http\Request\UpdatePatrocinadorRequest;
use App\Models\Patrocinador;
use App\Models\Ponente;
use Illuminate\Support\Carbon;

class PatrocinadorController extends Controller
{
    public function index()
    {
        $patrocinadores = Patrocinador::all();
        return view('admin.patrocinador.index', ["patrocinadores" => $patrocinadores]);
    }

    public function createPost(CreatePatrocinadorRequest $request)
    {
        try {
            $patrocinador = new Patrocinador();
            $patrocinador->fill($request->all());
            $patrocinador->image_url="";
            $patrocinador->saveOrFail();
            $fileOk = $request->hasFile('image_url') &&
                $request->file('image_url')->isValid();
            if ($fileOk) {
                $imgUrl = $this->storeFile($request->file('image_url'), $patrocinador->id);
                $patrocinador->image_url = $imgUrl;
            }
            $patrocinador->saveOrFail();
            return redirect()->route("index_patrocinador");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al crear el patrocinador" . " " . $e->getMessage() . " " . $e->getLine()])
                ->withInput();
        }
    }

    public function update($patrocinadorId)
    {
        $patrocinador = Patrocinador::find($patrocinadorId);
        return view('admin.patrocinador.update', ["patrocinador" => $patrocinador]);
    }

    public function updatePost(UpdatePatrocinadorRequest $request, $patrocinadorId)
    {
        try {
            $patroinador = Patrocinador::find($patrocinadorId);
            $patroinador->fill($request->all());
            $patroinador->saveOrFail();
            if ($request->file('image_url', null) !== null) {
                $fileOk = $request->hasFile('image_url') &&
                    $request->file('image_url')->isValid();
                if ($fileOk) {
                    $imgUrl = $this->storeFile($request->file('image_url'), $patroinador->id);
                    $patroinador->image_url = $imgUrl;
                }
                $patroinador->saveOrFail();
            }
            return redirect()->route("index_patrocinador");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al actualizar el patrocinador" . " " . $e->getMessage()])
                ->withInput();
        }
    }

    private function storeFile($file, $patrocinadorId)
    {
        $path = '/uploads/patrocinadores';
        $name = 'p_' . $patrocinadorId . "-" . Carbon::now()->format('Y-m-d') . "." . $file->extension();

        // Create path if does not exists
        if (!file_exists(public_path() . $path)) {
            mkdir(
                public_path() . $path,
                0777,
                true
            );
        }

        // Move image to corresponding directory
        $file->move(public_path() . $path, $name);
        return $path . '/' . $name;
    }

}
