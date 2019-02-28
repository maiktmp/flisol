@php
    /* @var $usuario \App\Models\Usuario*/
@endphp
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
    <style>
        @font-face {
            font-family: 'Elegance';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("http://eclecticgeek.com/dompdf/fonts/Elegance.ttf") format("truetype");
        }

        .table {
            border: 1px solid black;
            font-family: Elegance, sans-serif;
        }

        html,
        body {
            font-family: Elegance, sans-serif;
        }

    </style>
</head>
<body>
<div style="height: 200px"></div>
<div class="row my-5">
    <div class="col-5 offset-3">
        <div class="table text-center">
            <h1>FLISoL</h1>
            <h3>{{\Carbon\Carbon::now()->format('Y')}}</h3>
            <br>
            <img src="{{asset($usuario->QR_url)}}"
                 width="250px"
                 alt="img-qr"
                 style="margin: 5px"
            >
            <h4>{{$usuario->full_name}}</h4>
        </div>
    </div>
</div>
</body>
</html>
