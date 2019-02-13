<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/cisc.png') }}"/>
    <title>@yield('title', 'CISC FLISOL')</title>
    <!-- Stylesheets -->
    @include('templates.global_css')
    @stack('css')
</head>
<body>
<div class='main-container'>
    <header>
        @include('components.navbar')
    </header>
    <section>
            @yield('content')
    </section>
    <footer>
        @include('components.footer')
    </footer>
</div>
<!-- Javascript -->
@include('templates.global_js')
@stack('scripts')
</body>
</html>
