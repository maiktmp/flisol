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
                                {!! QrCode::size(180)->generate($usuario->QR); !!}
                                <a download
                                   class="btn btn-info ml-4"
                                   href="{{asset($usuario->QR_url)}}"
                                   role="button">Descargar código
                                    </a>
                            </div>
                            <div class="col-sm-12 col-md-6 offset-md-1 mt-4 text-justify">
                                <span>Lleva contigo este código para poder participar en las actividades el día del evento.</span>
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

