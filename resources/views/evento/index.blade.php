<?php
?>
@extends('templates.main')

@push("css")
    <link rel="stylesheet" type="text/css" href="{{asset('css/timeLine.css')}}">
@endpush

@push("scripts")
    <script type="text/javascript" src="{{asset('/js/moment.min.js?v=1')}}"></script>
    <script type="text/javascript" src="{{asset('/js/event/timeLine.js?v=1')}}"></script>
@endpush

@section('content')
    <input id="inp-url-get-all-events" type="hidden" value="{{route('get_all_events')}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-2 p-0">
                <ul id="time-line-nav" class="nav flex-column" style="width: 60px">
                </ul>
            </div>
            <div class="col-10 col-md-9 ">
                <div id="accordion">
                </div>
            </div>

        </div>
    </div>
@endsection
