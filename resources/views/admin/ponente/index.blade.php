<?php
/* @var $ponente \App\Models\Ponente */
?>
@extends('templates.main-admin')

@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-head mt-2">
                        <div class="row">
                            <div class="col-12 text-center"><h3>Ponentes</h3></div>
                            <div class="col-12 text-center">
                                <a class="btn btn-info"
                                   href="{{route('ponente_create')}}"
                                   role="button">Crear ponente</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">#</th>
                                            <th class="text-center" scope="col">Nombre</th>
                                            <th class="text-center" scope="col">Correo</th>
                                            <th class="text-center" scope="col">Telefono</th>
                                            <th class="text-center" scope="col">Empresa</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($ponentes as $ponente)
                                            <tr>
                                                <td class="text-center">{{$ponente->id}}</td>
                                                <td class="text-center">{{$ponente->nombre}}</td>
                                                <td class="text-center">{{$ponente->correo}}</td>
                                                <td class="text-center">{{$ponente->telefono}}</td>
                                                <td class="text-center">{{$ponente->empresa}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Sin ponentes registrados</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
