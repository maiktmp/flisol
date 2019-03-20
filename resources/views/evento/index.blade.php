<?php
?>
@extends('templates.main')

@push("css")
    <link rel="stylesheet" type="text/css" href="{{asset('css/timeLine.css?v=1')}}">
@endpush

@push("scripts")
    <script type="text/javascript" src="{{asset('/js/moment.min.js?v=2')}}"></script>
    <script type="text/javascript" src="{{asset('/js/event/timeLine.js?v=2')}}"></script>
@endpush

@section('content')
    <input id="inp-url-get-all-events" type="hidden" value="{{route('get_all_events')}}">
    <div class="container-fluid">
        <div class="row">
            <div id="div-hours" class="col-2 col-md-2 p-0 my-1">
                <ul id="time-line-nav" class="nav flex-column rounded-right" style="width: 65px">
                </ul>
            </div>
            <div class="col-10 col-md-9 mt-5 mb-3">
                <div id="accordion">
                </div>
            </div>

        </div>
    </div>
@endsection
