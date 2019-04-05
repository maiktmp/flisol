<?php
?>
@extends('templates.main')

@push("css")
    <link rel="stylesheet" type="text/css" href="{{asset('/css/timerStyle.css?v=1')}}">
@endpush

@push("scripts")
    <script type="text/javascript" src="{{asset('/js/funcionamientoTimer.js?v=2')}}"></script>
    <script type="text/javascript" src="{{asset('/js/moment.min.js?v=2')}}"></script>
@endpush



@section('content')
    <!-- <div class=" full-content" style="
        background-image: url({{asset('img/FLISoLB.png')}});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        ">
    </div> -->
    <center>
        <h2 class="title-timer mt-3">FLISOL 2019</h2>
        <br>
        <div id="div-links">
            <div class="cuenta-regresiva-flisol" id="div-link-flisol">
                <div class="row">
                    <div class="col img-fli">
                        <img src="{{asset('/img/FLISoL.png')}}" alt="flisol">
                    </div>
                    <div class="col">
                        <h3 class="title-links mt-3"><b>¡El gran evento es hoy!</b></h3>
                        <h3 class="title-links mt-3">Sigue las transimisiones en vivo en nuestras redes sociales:</h3>
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fab fa-facebook-square" style="color: #3b5999;"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="https://www.facebook.com/flisolittol/"
                                   target="_blank">Facebook FLISoL</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fab fa-youtube" style="color: #cd201f;"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="https://www.youtube.com/channel/UC8DBJhYzoty2EIogtSF7B_A"
                                   target="_blank">Canal de YouTube FLISoL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="div-padre-cuenta">
            <div class="cuenta-regresiva-flisol" id="div-cuenta">
                <div class="row" id="row-cuenta">
                    <div class="col-md-2 colm2">
                        <input readonly="true" id="days-event" class="count-down"> Días
                    </div>
                    <div class="col-md-1 colm1"></div>
                    <div class="col-md-2 colm2">
                        <input readonly="true" id="hr-event" class="count-down"> Horas
                    </div>
                    <div class="col-md-1 colm1">:</div>
                    <div class="col-md-2 colm2">
                        <input readonly="true" id="min-event" class="count-down"> Minutos
                    </div>
                    <div class="col-md-1 colm1">:</div>
                    <div class="col-md-3 colm3">
                        <input readonly="true" id="sec-event" class="count-down"> Segundos
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection
