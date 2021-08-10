<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BSPI') }}</title>

    <!-- Icono de la Pestaña -->
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}">

    <!-- Plantilla General de los CSS -->
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">

    <!-- Evitar ataques X-CSRF-TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    

    <!-- Main Sidebar Container -->
     
    <div id="app">
    <v-app  >
    <home></home>
    </v-app>
    </div>
 

    </body>
    <!-- App JS de Vue -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Plantilla General de los JS -->
    <script src="{{ asset('js/plantilla.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">


</html>
