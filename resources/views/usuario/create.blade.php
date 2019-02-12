@php
    /* @var  $user \App\Models\Usuario*/
@endphp
@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row mb-2 mt-5 ">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                @if($user===null)
                                    <p style="font-size: 1.8em">
                                        Liga de registro no válida
                                    </p>
                                @else

                                        @include('usuario._form',["user"=>$user])
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

