@php

    /* @var $ponente \App\Models\Ponente*/
@endphp
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{asset('/js/admin/ponente/_form.js')}}"></script>
@endpush

<form method="POST"
      enctype="multipart/form-data"
      action="{{isset($ponente)?
      route('ponente_update_post',["ponenteId"=>$ponente->id]):
      route('ponente_create_post_post')}}"
      class="mb-3">
    @csrf
    <div class="row text-left">
        @if($errors->has('general'))x
        <div class="alert alert-danger">
            <p>
                {{$errors->first('general')}}
            </p>
        </div>
        @endif
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre',
                    'name' => 'nombre',
                    'value'=>isset($ponente)?$ponente->nombre:old('nombre')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Correo',
                    'name' => 'correo',
                    'value'=>isset($ponente)?$ponente->correo:old('correo')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Telefono',
                    'name' => 'telefono',
                    'value'=>isset($ponente)?$ponente->telefono:old('telefono')
                ])
        </div>
        <div class="col-sm-12 col-lg-8">
            @input([
                    'label' => 'Direccion',
                    'name' => 'direccion',
                    'value'=>isset($ponente)?$ponente->direccion:old('direccion')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Empresa',
                    'name' => 'empresa',
                    'value'=>isset($ponente)?$ponente->empresa:old('empresa')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'label' => 'Estado',
                  'name' => 'fk_id_estado',
                  'options' => \App\Models\Estado::asMap(),
                  'selected'=> isset($ponente)?$ponente->fk_id_estado*1:old('fk_id_estado')*1,
                  'placeHolder'=>"Selecciona un estado"
              ])
        </div>
        <div class="col-12 text-center">
            <span>Descripción</span>
        </div>
        <div class="col-12 my-2">
            <textarea name="descripcion">
                {{isset($ponente)?$ponente->descripcion:old('descripcion')}}
            </textarea>
        </div>
        <div class="col-12">
            <img id="img-ponente" src="" alt="">
        </div>
        <div class="col-12">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file"
                           name="image_url"
                           class="custom-file-input"
                           id="inputGroupFile03">
                    <label class="custom-file-label" for="inputGroupFile03">Foto del
                        expositor</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="submit"
                    class="btn btn-primary">
                {{
                    isset($ponente)?
                    "ACTUALIZAR":
                    "CREAR"
                }}
            </button>
        </div>
    </div>
</form>

<input id="inp-url-municipios" type="hidden" value="{{route('user_get_city_by_state',['stateId'=>'FAKE_ID'])}}">
<input id="inp-url-instituciones" type="hidden"
       value="{{route('user_get_institutes_by_state',['stateId'=>'FAKE_ID'])}}">
