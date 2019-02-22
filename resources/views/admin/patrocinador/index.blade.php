<?php
/* @var $patrocinador \App\Models\Patrocinador */
?>
@extends('templates.main-admin')

@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-head mt-2">
                        <div class="row">
                            <div class="col-12 text-center"><h3>Patrocinadores</h3></div>
                            <div class="col-12 text-center">
                                <a class="btn btn-info"
                                   href="{{route('sponsort_create')}}"
                                   role="button">Crear patrocinador</a>
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
                                            <th class="text-center" scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($patrocinadores as $patrocinador)
                                            <tr>
                                                <td class="text-center">{{$patrocinador->id}}</td>
                                                <td class="text-center">{{$patrocinador->r_social}}</td>
                                                <td class="text-center">{{$patrocinador->correo}}</td>
                                                <td class="text-center">{{$patrocinador->telefono}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('sponsort_update',["sponsortId"=>$patrocinador->id])}}">
                                                        <i class="fas fa-pencil-alt text-success"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Sin patrocinadores registrados</td>
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
