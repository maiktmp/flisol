@php
    /* @var  $user \App\Models\Usuario*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">

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
                                                    'label' => 'Correo',
                                                    'name' => 'correo',
                                                    'value'=>old('correo')
                                                ])
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
                                        <div class="col-sm-12 col-lg-2">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button type="submit"
                                                    class="btn btn-primary btn-spin">FINALIZAR REGISTRO
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

