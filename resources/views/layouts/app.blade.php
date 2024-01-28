<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap 5 cdn -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <!-- bootstrap 5 js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- htmx cdn -->
    <script src="https://unpkg.com/htmx.org/dist/htmx.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title', config('app.name', 'Fourbie Exchange'))</title>
</head>

<body>
    @include('layouts.header')

    <div id="app">
        <div class="container">
            @include('layouts.alerts')
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    <!-- Additional scripts or assets can be included here -->
</body>

</html>
