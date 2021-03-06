<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TerezTech</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('_include.nav')
    <div id="app" style="background-color: whitesmoke;">        
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/buefy.js') }}"></script>
     @yield('scripts')
     </script>
</body>
</html>
