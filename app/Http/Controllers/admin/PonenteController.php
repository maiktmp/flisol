<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 19/02/2019
 * Time: 01:53 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Request\CreatePoeneteRequest;
use App\Models\Ponente;
use Carbon\Carbon;

class PonenteController extends Controller
{
    public function index()
    {
        $ponentes = Ponente::all();
        return view('admin.ponente.index', ["ponentes" => $ponentes]);
    }

    public function createPost(CreatePoeneteRequest $request)
    {
        try {
            $ponente = new Ponente();
            $ponente->fill($request->all());
            $ponente->saveOrFail();
            $fileOk = $request->hasFile('image_url') &&
                $request->file('image_url')->isValid();
            if ($fileOk) {
                $imgUrl = $this->storeFile($request->file('image_url'), $ponente->id);
                $ponente->image_url = $imgUrl;
            }
            $ponente->saveOrFail();
            return redirect()->route("index_ponente");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al crear el ponente" . " " . $e->getMessage()])
                ->withInput();
        }
    }

    public function update($ponenteId)
    {
        $ponente = Ponente::find($ponenteId);
        return view('admin.ponente.update', ["ponente" => $ponente]);
    }

    public function updatePost(CreatePoeneteRequest $request, $ponenteId)
    {
        try {
            $ponente = Ponente::find($ponenteId);
            $ponente->fill($request->all());
            $ponente->saveOrFail();
            if ($request->file('image_url', null) !== null) {
                $fileOk = $request->hasFile('image_url') &&
                    $request->file('image_url')->isValid();
                if ($fileOk) {
                    $imgUrl = $this->storeFile($request->file('image_url'), $ponente->id);
                    $ponente->image_url = $imgUrl;
                }
                $ponente->saveOrFail();
            }
            return redirect()->route("index_ponente");
        } catch (\Throwable $e) {
            return back()
                ->withErrors(["general" => "Ocurrio un error al actualizar el ponente" . " " . $e->getMessage()])
                ->withInput();
        }
    }

    private function storeFile($file, $ponenteId)
    {
        $path = '/uploads/ponentes';
        $name = 'version_' . $ponenteId . "-" . Carbon::now()->format('Y-m-d') . "." . $file->extension();

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
