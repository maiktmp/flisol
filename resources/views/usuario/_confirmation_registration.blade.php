<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous"
    />
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
          crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('/css/flisol.css') }}">
</head>
<body>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12 my-5">
            <div class="card">
                <div class="card-body text-justify">
                    <div class="row">
                        <div class="col-12  text-center" style="background-color: black;color: white;">
                            <h3 class="mt-2">FliSol {{date('Y')}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <p style="font-size: 1.8em">
                                Gracias por tu interés por este gran evento, por favor
                                completa tu
                                registro haciendo click en el siguiente botón.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a
                                role="button"
                                class="btn btn-success"
                                href="{{route('finish_registry',['data'=>bcrypt($user->correo)])}}"
                                style="color: white">Continuar registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
        integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl"
        crossorigin="anonymous"></script>

</body>
</html>
