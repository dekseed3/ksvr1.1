<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="{{asset('css/css_login/assets/css/main.css')}}" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="{{asset('css/css_login/assets/css/noscript.css')}}" /></noscript>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
    <link href="{{ asset('css/css-home/fa-svg-with-js.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body class="is-loading">

      @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/js-home/fontawesome-all.js') }}"></script>
    @yield('scripts')
</body>
</html>
