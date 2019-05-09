<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
</head>

<body class="font-opensans font-normal text-gray-800 leading-normal bg-gray-200">
    <div id="app">
        {{ $slot }}
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @include('layouts.partials.footerScripts')
</body>

</html>