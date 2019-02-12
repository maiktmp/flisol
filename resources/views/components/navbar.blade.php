<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand navbar-brand-text" href="#" style="width: 25%;">
        <img src="{{asset('/img/flisolChida.png')}}" id="img-brand-flisol">
    </a>
    <button style="border: 1px #FFF solid;" class="navbar-toggler" 
                    type="button" data-toggle="collapse" data-target="#navCollapse" 
                    aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color: #FFF;"></i>
    </button>
    <div id="navCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
                <a class="nav-link nav-link-text active" href="#">Inicio</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-text" href="{{route('registry_email')}}">Registro</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-text" href="#">Eventos</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-text" href="#">Ponentes y Patrocinadores</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-text" href="#">Contacto</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-text" href="#">Recuperar QR</a>
            </li>

        </ul>
    </div>
</nav>
