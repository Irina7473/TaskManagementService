<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">
    <!-- Scripts -->
    {{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="myfond1">

<div>
    <x-top-menu/>
</div>

{{--        <h4 class="text-primary bg-light">@yield('subtitle', '') </h4>--}}
<main>
    {{ $slot }}
</main>


</body>

<x-footer/>

</html>
