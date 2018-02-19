<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
    <link href="{{ asset('css/css-home/fa-svg-with-js.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body>
<div id="wrap">
    @include('_includes.nav.home')

      @yield('content')

    @include('_includes.footer')

</div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script src="{{ asset('js/js-home/fontawesome-all.js') }}"></script>
    @yield('scripts')
</body>
</html>
