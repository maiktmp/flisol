@php
    /* @var  $usuario \App\Models\Usuario*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>Este es tu código QR {{$usuario->nombre}}</h3>
                            </div>
                            <div class="col-6 offset-3">
                                {!! QrCode::size(400)->generate($usuario->QR); !!}
                            </div>
                            <a href="{{asset($usuario->QR_url)}}">
                                Descargar Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

