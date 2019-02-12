<?php
?>
@extends('templates.main')

@push("css")
	<link rel="stylesheet" type="text/css" href="{{asset('/css/timerStyle.css')}}">
@endpush
@push("scripts")
	<script type="text/javascript" src="{{asset('/js/funcionamientoTimer.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/moment.min.js')}}"></script>
@endpush


@section('content')
    <!-- <div class=" full-content" style="
        background-image: url({{asset('img/FLISoLB.png')}});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        ">
    </div> -->
    <br>
    <br>
	<center>
        <h2 class="title-timer">FLISOL 2019</h2>
        {{--<h1>{{asset('/js/moment.min.js')}}</h1>--}}
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
    <br>
    <br>
    <br>
@endsection
