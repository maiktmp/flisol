@php
    /* @var  $user \App\Models\Usuario*/
@endphp
@extends('templates.main-admin')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                @include('admin.event._form',["evento"=>$event])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

