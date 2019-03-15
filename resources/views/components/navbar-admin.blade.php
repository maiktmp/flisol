<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand navbar-brand-text" href="{{route('welcome')}}" style="">
        <div style="
            background-image: url({{asset('/img/flisolChida.png')}});
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width: 150px;
            height: 50px
            ">
        </div>
        {{--        <img src="{{asset('/img/flisolChida.png')}}" id="img-brand-flisol">--}}
    </a>
    <button style="border: 1px #FFF solid;" class="navbar-toggler"
            type="button" data-toggle="collapse" data-target="#navCollapse"
            aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color: #FFF;"></i>
    </button>
    <div id="navCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
                <a class="nav-link nav-link-text active" href="{{route('index_ponente')}}">Ponentes</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
                <a class="nav-link nav-link-text active" href="{{route('index_patrocinador')}}">Patrocinadores</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
                <a class="nav-link nav-link-text active" href="{{route('index_event')}}">Eventos</a>
            </li>
        </ul>
    </div>
</nav>
