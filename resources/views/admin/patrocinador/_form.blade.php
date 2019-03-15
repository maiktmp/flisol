@php

    /* @var $patrocinador \App\Models\Patrocinador*/
@endphp
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{asset('/js/admin/ponente/_form.js')}}"></script>
@endpush

<form method="POST"
      enctype="multipart/form-data"
      action="{{isset($patrocinador)?
      route('sponsort_update_post',["sponsortId"=>$patrocinador->id]):
      route('sponsort_create_post')}}"
      class="mb-3">
    @csrf
    {{$errors}}
    <div class="row text-left">
        @if($errors->has('general'))
        <div class="alert alert-danger">
            <p>
                {{$errors->first('general')}}
            </p>
        </div>
        @endif
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre',
                    'name' => 'r_social',
                    'value'=>isset($patrocinador)?$patrocinador->r_social:old('r_social')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Correo',
                    'name' => 'correo',
                    'value'=>isset($patrocinador)?$patrocinador->correo:old('correo')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Telefono',
                    'name' => 'telefono',
                    'value'=>isset($patrocinador)?$patrocinador->telefono:old('telefono')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Url oficial',
                    'name' => 'url',
                    'value'=>isset($patrocinador)?$patrocinador->url:old('url')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre del contacto',
                    'name' => 'nom_contacto',
                    'value'=>isset($patrocinador)?$patrocinador->nom_contacto:old('nom_contacto')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'label' => 'Estado',
                  'name' => 'fk_id_estado',
                  'options' => \App\Models\Estado::asMap(),
                  'selected'=> isset($patrocinador)?$patrocinador->fk_id_estado*1:old('fk_id_estado')*1,
                  'placeHolder'=>"Selecciona un estado"
              ])
        </div>
        <div class="col-12 text-center">
            <span>Descripción</span>
        </div>
        <div class="col-12 my-2">
            @textarea([
                "label"=>"",
                "name"=>"descripcion",
                "rows"=>"5",
                "value"=>isset($patrocinador)?$patrocinador->descripcion:old('descripcion'),
            ])
        </div>


        <div class="col-12">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file"
                           name="image_url"
                           class="custom-file-input"
                           id="inputGroupFile03">
                    <label class="custom-file-label" for="inputGroupFile03">Foto del patrocinador</label>
                </div>
            </div>
            @if($errors->has('image_url'))
                <div class="alert alert-danger text-center">
                    <p>
                        {{$errors->first('image_url')}}
                    </p>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="submit"
                    class="btn btn-primary">
                {{
                    isset($patrocinador)?
                    "ACTUALIZAR":
                    "CREAR"
                }}
            </button>
        </div>
    </div>
</form>
