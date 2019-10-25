<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        @include('inc.navbar')
        <div style="margin-top:10px" class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <!-- This ckeditor has to be just above </body>-->
        <script src="{{URL::to('laravel-ckeditor-master/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace('summary-ckeditor');
        </script>
</body>
</html>
