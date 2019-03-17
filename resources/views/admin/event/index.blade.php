<?php
/* @var $evento \App\Models\Evento */
?>
@extends('templates.main-admin')

@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-head mt-2">
                        <div class="row">
                            <div class="col-12 text-center"><h3>Eventos</h3></div>
                            <div class="col-12 text-center">
                                <a class="btn btn-info"
                                   href="{{route('event_create')}}"
                                   role="button">Crear evento</a>
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
                                            <th class="text-center" scope="col">Cupo</th>
                                            <th class="text-center" scope="col">Inscritos</th>
                                            <th class="text-center" scope="col">Hora</th>
                                            <th class="text-center" scope="col">Duración</th>
                                            <th class="text-center" scope="col">Ponente</th>
                                            <th class="text-center" scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($eventos as $evento)
                                            <tr>
                                                <td class="text-center">{{$evento->id}}</td>
                                                <td class="text-center">{{$evento->nombre}}</td>
                                                <td class="text-center">{{$evento->cupo}}</td>
                                                <td class="text-center">{{$evento->inscritos}}</td>
                                                @php
                                                     $init=new \Carbon\Carbon($evento->hora_inicio);
                                                     $init=$init->format("H:i");
                                                @endphp
                                                <td class="text-center">{{$init}}</td>
                                                <td class="text-center">{{$evento->duracion}}</td>
                                                <td class="text-center">
                                                    @forelse($evento->tienePonentes as $ponentes)
                                                        {{$ponentes->nombre}}
                                                    @empty
                                                    @endforelse
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('event_update',["eventId"=>$evento->id])}}">
                                                        <i class="fas fa-pencil-alt text-success"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Sin eventos registrados</td>
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
