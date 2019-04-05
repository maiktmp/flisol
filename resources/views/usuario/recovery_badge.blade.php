@php
    /* @var $user  \App\Models\Usuario*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-sm-12 col-lg-8 offset-lg-2 mb-4">
                <div class="card">
                    <div class="card-body">
                        @if($errors->has('general'))
                            <div class="alert alert-danger text-center">
                                {{$errors->first('general')}}
                            </div>
                        @endif
                        @if($errors->has('sendMail'))
                            <div class="alert alert-success text-center">
                                {{$errors->first('sendMail')}}
                            </div>
                        @endif
                        <form method="POST" class="box">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Correo de registro.</h5>
                                </div>
                                @csrf
                                <div class="col-12">
                                    @input([
                                            'label' => 'Correo',
                                            'name' => 'email',
                                            'value'=>old('email')
                                        ])
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit"
                                            class="btn btn-primary btn-spin">BUSCAR
                                    </button>
                                </div>
                            </div>
                        </form>
                            {{--{{$user}}--}}
                        @if(isset($user))
                            <div class="row">
                                <div class="col-12">
                                    @input([
                                               'label' => 'Nombre',
                                               'name' => 'nombre',
                                               'value'=> $user->full_name,
                                               'properties'=>["disabled"=>true]
                                           ])
                                </div>
                                <div class="col-12">
                                    @input([
                                               'label' => 'Email',
                                               'name' => 'email',
                                               'value'=> $user->correo,
                                               'properties'=>["disabled"=>true]
                                           ])
                                </div>
                                <div class="col-12 text-center">
                                    <a
                                        id="btn-print"
                                        class="btn btn-info ml-4"
                                        href="{{route('user_identified_card',["userId"=>$user->id])}}"
                                        role="button">Descargar gafete
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
