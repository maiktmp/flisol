<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/flisol.css') }}">
</head>
<body>
<div class='container-fluid' style="">
    <div class="row">
        <div class="col-12 my-5">
            <div class="card">
                <div class="card-body text-justify">
                    <div class="row">
                        <div class="col-12  text-center" style="background-color: black;color: white;">
                            <h3 class="mt-2">FLISoL {{date('Y')}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="font-size: 1.8em">
                                Tu registro ha concluido satisfactoriamente.
                                Por favor lleva contigo el gafete anexado a este correo
                                para poder participar en las actividades el día del evento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
        integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl"
        crossorigin="anonymous"></script>
</body>
</html>
