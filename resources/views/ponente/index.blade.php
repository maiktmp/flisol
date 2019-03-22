@php
    /* @var $ponente \App\Models\Ponente*/
@endphp
@extends('templates.main')

@push("css")
    <link rel="stylesheet" type="text/css" href="{{asset('/css/profiles-css.css?V=2')}}">
@endpush

@push("scripts")
    <script type="text/javascript" src="{{asset('js/moment.min.js?V=2')}}"></script>
    <script type="text/javascript" src="{{asset('/js/ponente/funcProfiles.js?V=2')}}"></script>
@endpush

@section('content')
    <div class="container">
        <div class="card bg-light" style="padding: 15px 15px;">
            <div class="row">
                @forelse($ponentes as $ponente)
                    @include("ponente._card",[
                        "name" => $ponente->nombre,
                        "id" => $ponente->id,
                        "sponsor" => $ponente->empresa,
                        "img_url" => $ponente->image_url,
                    ])
                @empty
                    <div class="col-12 text-center">
                        <h2 class="text-center">Espera a nuestros geniales ponentes.</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <input type="hidden" value="{{route("ponente_view",["ponenteId"=>"FAKE_ID"])}}" id="inp-url-ponente-view">
@endsection

@section("after_modal")
    <!--Modal-->
    <div class="modal fade" id="modal-profile">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"><strong>Información de ponente</strong></h6>
                    <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="card card-modal">
                            <div class="card-header">Ponente</div>
                            <div class="card-body">
                                <div class="row" style="padding-left: 30px; padding-right: 10px;">
                                    <div class="col-lg-4 offset-1">
                                        <div class="centrar centrar-vertical-padre">
                                            <img width="100%" src="{{asset("")}}" class="centrar-vertical-hijo"
                                                 id="img-ponente">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <label class="small">Nombre: </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                    </div>
                                                    <input id="inp-ponente-nombre"
                                                           type="text"
                                                           class="form-control bg-inp-white"
                                                           readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <label class="small">Empresa: </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-university"></i></span>
                                                    </div>
                                                    <input id="inp-ponente-sponsor"
                                                           type="text"
                                                           class="form-control bg-inp-white"
                                                           readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <label class="small">Contacto: </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-at"></i></span>
                                                    </div>
                                                    <input id="inp-ponente-contacto"
                                                           type="text"
                                                           class="form-control bg-inp-white"
                                                           readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <label class="small">Información del ponente: </label>
                                        <div id="ponente-desc"></div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-modal">
                            <div class="card-header">Ponencias planeadas</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="info centrar">
                                        <th width="20%">Tipo de ponencia</th>
                                        <th width="40%">Nombre Ponencia</th>
                                        <th width="20%">Hora</th>
                                        <th width="20%">Edificio-Aula</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody-events">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

