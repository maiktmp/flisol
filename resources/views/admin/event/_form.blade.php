@php
    /* @var $evento \App\Models\Evento*/
@endphp
@push('scripts')
    <script type="text/javascript" src="{{asset('/js/moment.min.js?v=1')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{asset('/js/admin/event/_form.js')}}"></script>
@endpush
@push('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endpush
<form method="POST"
      enctype="multipart/form-data"
      action="{{isset($evento)?
      route('event_update_post',["eventId"=>$evento->id]):
      route('event_create_post')}}"
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
        <div class="col-sm-12 col-lg-12">
            @input([
                    'label' => 'Nombre',
                    'name' => 'nombre',
                    'value'=>isset($evento)?$evento->nombre:old('nombre')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @input([
                    'label' => 'Cupo',
                    'name' => 'cupo',
                    'value'=>isset($evento)?$evento->cupo:old('cupo')
                ])
        </div>
        @php
            if(isset($evento)){
             $init=new \Carbon\Carbon($evento->hora_inicio);
             $init=$init->format("H:i");
            }
        @endphp
        <div class="col-sm-12 col-lg-4">
            @input([
                    'id'=>'inp-datepicker',
                    'label' => 'Hora de inicio',
                    'name' => 'hora_inicio',
                    'value'=>isset($evento)?$init:old('hora_inicio')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @php
                    if(isset($evento)){
                     $duration=new \Carbon\Carbon($evento->duracion);
                     $duration=$duration->format("H:i");
                    }
            @endphp
            @input([
                    'label' => 'Duración',
                    'name' => 'duracion',
                    'value'=>isset($evento)?$duration:old('duracion')
                ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'label' => 'Ponente',
                  'name' => 'fk_id_ponente',
                  'options' => \App\Models\Ponente::asMap(),
                  'selected'=> isset($evento)?$evento
                  ->tienePonentes
                  ->first()
                  ->id*1:old('fk_id_ponente')*1,
                  'placeHolder'=>"Selecciona un ponente"
              ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'label' => 'Ubicación',
                  'name' => 'fk_id_ubicacion',
                  'options' => \App\Models\Ubicacion::asMap(),
                  'selected'=> isset($evento)?$evento
                   ->fk_id_ubicacion*1:old('fk_id_ubicacion')*1,
                  'placeHolder'=>"Selecciona un ubicacion"
              ])
        </div>
        <div class="col-sm-12 col-lg-4">
            @select([
                  'label' => 'Tipo de evento',
                  'name' => 'fk_id_tipo_evento',
                  'options' => \App\Models\TipoEvento::asMap(),
                  'selected'=> isset($evento)?$evento
                   ->fk_id_tipo_evento*1:old('fk_id_tipo_evento')*1,
                  'placeHolder'=>"Selecciona un tipo de evento"
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
                "value"=>isset($evento)?$evento->descripcion:old('descripcion'),
            ])
        </div>
        <div class="col-12 text-center">
            <span>Requisitos</span>
        </div>
        <div class="col-12 my-2">
            @textarea([
                "label"=>"",
                "name"=>"requisitos",
                "rows"=>"5",
                "value"=>isset($evento)?$evento->requisitos:old('requisitos'),
            ])
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="submit"
                    class="btn btn-primary">
                {{
                    isset($evento)?
                    "ACTUALIZAR":
                    "CREAR"
                }}
            </button>
        </div>
    </div>
</form>
