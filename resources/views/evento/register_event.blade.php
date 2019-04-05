@php
    /*  @var $event \App\Models\Evento*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        @if($errors->has('general'))
                            <div class="alert alert-danger text-center">
                                {{$errors->first('general')}}
                            </div>
                        @endif
                        @if($errors->has('success'))
                            <div class="alert alert-success text-center">
                                {{$errors->first('success')}}
                            </div>
                        @endif
                        <form method="POST" class="box">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <H3>Registro previo a taller y conferencia</H3>
                                </div>
                                <div class="col-12 text-center">
                                    <p>Ingresa el correo del asistente</p>
                                </div>
                                @csrf
                                <div class="col-12">
                                    @input([
                                    'label' => 'Correo',
                                    'name' => 'email',
                                    'value'=>old('email')
                                    ])
                                </div>
                                <div class="col-12 text-center">
                                    <h2>O su código</h2>
                                    <p>EL código es el que aparece bajo el código qr (12-65432168)</p>
                                </div>
                                <div class="col-12">
                                    @input([
                                    'label' => 'Código',
                                    'name' => 'Qr',
                                    'value'=>old('Qr')
                                    ])
                                </div>
                                <div class="col-12">
                                    @select([
                                    'label' => 'Taller o conferencia',
                                    'name' => 'fk_id_event',
                                    'options'=>\App\Models\Evento::asMap()
                                    ])
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit"
                                            class="btn btn-primary">INSCRIBIRME
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

