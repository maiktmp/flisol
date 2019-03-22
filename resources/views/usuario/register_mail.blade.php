@php

    @endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        @if($errors->has('general'))
                            <div class="alert alert-danger">
                                {{$errors->first('general')}}
                            </div>
                        @endif
                        @if($errors->has('sendMail'))
                            <div class="alert alert-success">
                                {{$errors->first('sendMail')}}
                            </div>
                        @endif
                        <form method="POST" class="box">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Ingresa tu correo para continuar con el registro</h5>
                                </div>
                                @csrf
                                <div class="col-12">
                                    @input([
                                            'label' => 'Correo',
                                            'name' => 'email',
                                            'value'=>old('email')
                                        ])
                                </div>
                                <div class="col-12 text-right">
                                    <a href="{{route('recovery_email')}}">¿No llego el correo de registro?</a>
                                </div>
                                <div class="col-12 text-center my-2 ">
                                    <button type="submit"
                                            class="btn btn-primary btn-spin">REGISTRARME
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

