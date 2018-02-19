<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
    <link href="{{ asset('css/css-home/fa-svg-with-js.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body class="layout-documentation page-components">

    @include('_includes.nav.main')
    @include('_includes.nav.manage_system.manage2')

    <section class="section">
      <div id="app">
        @yield('content')
      </div>
    </section>

    @include('_includes.footer_manage')


    <!-- Scripts -->
    <script src="{{ asset('js/js-home/fontawesome-all.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    {{-- @include('_includes.notifications.toast') --}}
    @yield('scripts')


</body>
</html>
