@php

    @endphp

@push('scripts')
    <script src="{{ asset('js/usuario/_form.js') }}"></script>
@endpush
<form method="POST"
      class="mb-3">
    @csrf
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Nombre',
                    'name' => 'nombre',
                    'value'=>old('nombre')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">

            @input([
                    'label' => 'Edad',
                    'name' => 'edad',
                    'type'=> 'number',
                     'value'=>old('edad')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">

            @input([
                    'label' => 'Correo ',
                    'name' => 'correo',
                     'value'=>old('correo')
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
                    class="btn btn-primary">REGISTARME
            </button>
        </div>
    </div>
</form>

<input id="inp-url-municipios" type="hidden" value="{{route('user_get_city_by_state',['stateId'=>'FAKE_ID'])}}">
<input id="inp-url-instituciones" type="hidden"
       value="{{route('user_get_institutes_by_state',['stateId'=>'FAKE_ID'])}}">
