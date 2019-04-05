@php
    /* @var  $user \App\Models\Usuario*/
@endphp
@extends('templates.main-admin')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-sm-12 col-md-6 offset-md-3 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                {{Auth::check()}}
                                {{Auth::user()}}
                                {{Auth::validate()}}
                                ASDASD

                                <form method="post" action="{{route('login_auth')}}">
                                    @csrf
                                    <div class="row text-left">
                                        <div class="col-12">
                                            @if($errors->has('general'))
                                                <div class="alert alert-danger">
                                                    <p>
                                                        {{$errors->first('general')}}
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 col-lg-12">
                                            @input([
                                                    'label' => 'Usuario',
                                                    'name' => 'username',
                                                ])
                                        </div>
                                        <div class="col-sm-12 col-lg-12">
                                            @input([
                                                    'label' => 'Contraseña',
                                                    'name' => 'password',
                                                    'type'=>'password'
                                                ])
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Entrar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

