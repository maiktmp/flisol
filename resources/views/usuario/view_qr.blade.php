@php
    /* @var  $usuario \App\Models\Usuario*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-sm-10 offset-sm-1 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>Este es tu código QR {{$usuario->nombre}}</h3>
                            </div>
                            <div class="col-4 offset-sm-2 offset-md-0 text-center">
                                {{--{!! QrCode::size(180)--}}
                                {{--->merge(asset("/img/FliSoL.png"), .4, true)--}}
                                {{--->generate($usuario->QR); !!}--}}
                                <img src="{{asset($usuario->QR_url)}}"
                                     alt="qr-img"
                                     height="200px"
                                     width="200px"
                                >
                            </div>
                            <div class="col-sm-12 col-md-6 offset-md-1 mt-4 text-justify">
                                <span>
                                    Es importante que lleves contigo el gafete que se te dará a continuación
                                    para poder participar en las actividades el día del evento.
                                </span>
                            </div>
                            <div class="col-12 text-center">
                                <a
                                    id="btn-print"
                                    class="btn btn-info ml-4"
                                    href="{{route('user_identified_card',["userId"=>$usuario->id])}}"
                                    role="button">Descargar gafete
                                </a>
                            </div>
                            {{--<div class="col-12">--}}
                            {{--<a href="{{asset($usuario->QR_url)}}">--}}
                            {{--Descargar Código--}}
                            {{--</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

