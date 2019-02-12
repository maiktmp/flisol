@php

    @endphp

@push('scripts')
    <script src="{{ asset('js/usuario/_form.js') }}"></script>
@endpush

<form method="POST"
      class="mb-3">
    @csrf
    <div class="row text-left">
        @if($errors->has('general'))
            <div class="alert alert-danger">
                <p>
                    {{$errors->first('general')}}
                </p>
            </div>
        @endif

        <div class="col-12 text-center my-2">
            <span>Algunos datos sobre ti</span>
        </div>

        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre',
                    'name' => 'nombre',
                    'value'=>old('nombre')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Apellido Paterno',
                    'name' => 'app',
                    'value'=>old('app')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Apellido Materno',
                    'name' => 'apm',
                    'value'=>old('apm')
                ])
        </div>
        <div class="col-sm-6 col-lg-2">
            @input([
                    'label' => 'Edad',
                    'name' => 'edad',
                    'type'=> 'number',
                     'value'=>old('edad')
                ])
        </div>
        <div class="col-sm-6 col-lg-2">
            @select([
                    'label' => 'Sexo',
                    'name' => 'sexo',
                    'options'=> [
                        "M"=>"Masculino",
                        "F"=>"Femenino",
                    ],
                     'selected'=>old('sexo')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                    'label' => '¿Tienes alguna discapacidad? ',
                    'name' => 'fk_id_discapacidad',
                    'options'=>\App\Models\Discapacidad::asMap(),
                     'selected'=> old('fk_id_discapacidad')*1,
                    'placeHolder'=>"Ninguna",
                ])
        </div>
        <div class="col-sm-12 mty-2 text-center">
            <span>¿De que lugar nos visitas?</span>
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'id' => 'select-estado',
                  'label' => 'Estado',
                  'name' => 'fk_id_estado',
                  'options' => \App\Models\Estado::asMap(),
                  'selected'=> old('fk_id_estado')*1,
                  'placeHolder'=>"Selecciona un estado"
              ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'id'=>'select-municipio',
                  'label' => 'Municipio',
                  'name' => 'fk_id_municipio',
                  'options' => \App\Models\Municipio::asMap(old('fk_id_estado')*1),
                  'selected'=>old('fk_id_municipio')*1
              ])
        </div>

        <div class="col-sm-12 col-lg-4">
            @select([
                  'id'=>'select-instituto',
                  'label' => 'Institución',
                  'name' => 'fk_id_instituto',
                  'options' =>\App\Models\Institucion::asMap(old('fk_id_municipio')*1),
                  'selected'=>old('fk_id_instituto')
              ])
        </div>
        <input name="userId" type="hidden" value="{{$user->id}}">
        <div id="div-institute-name" class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre de tu institución',
                    'name' => 'institucion[nombre]',
                    'errorName' => 'institucion.nombre',
                    'value'=>old('institucion[nombre]')
                ])
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="submit"
                    class="btn btn-primary">FINALIZAR REGISTRO
            </button>
        </div>
    </div>

</form>

<input id="inp-url-municipios" type="hidden" value="{{route('user_get_city_by_state',['stateId'=>'FAKE_ID'])}}">
<input id="inp-url-instituciones" type="hidden"
       value="{{route('user_get_institutes_by_state',['stateId'=>'FAKE_ID'])}}">
