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
<div style=" margin-left: 125px;" class=" table row my-5">
    <div class="text-center table" style=" height: 200px; width: 450px;padding-top: 20px;padding-left: 20px">
        <div class="text-center" style="display:inline-block;width: 200px;margin-top: -5px">
            <img src="{{asset('/img/FLISoL.png')}}"
                 width="80px"
                 alt="img-qr"
                 style="position: absolute;left: 200px;top: -50px"
            >
            <br>
            <span style="font-size: 10px; color: #94c11f">
                        FESTIVAL LATINOAMERICANO DE INSTALACIÓN DE SOFTWARE LIBRE
                    </span>
            <br>
            <span style="font-size: 18px; color: #94c11f">
                      {{$usuario->full_name}}
                    </span>
        </div>
        <div class="text-center" style="display:inline-block;width: 200px;margin-top: 15px">
            <img src="{{asset("/img/logo.png")}}"
                 width="50px"
                 alt="img-qr"
                 style="margin: 5px; display: inline"
            >
            <img src="{{asset("/img/cisc.png")}}"
                 width="70px"
                 alt="img-qr"
                 style="margin-left: 20px; margin-top:5px;display: inline"
            >
            <br>
            <img src="{{asset($usuario->QR_url)}}"
                 width="180px"
                 height="160px"
                 alt="img-qr"
                 style="margin: 5px;"
            >
            <span style="position: absolute;left: 350px;top: 220px;font-size: 12px;width: 200px"><b>Folio:</b>{{$usuario->QR}}</span>
        </div>
    </div>
</div>
</body>
</html>
