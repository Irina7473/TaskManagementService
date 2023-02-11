<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Планировщик задач - @yield('title') </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    {{--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">

</head>
<body class="myfond1">

Если сессия открытая существует, то перейти к field

<section class="myfond">
    @yield('door')
</section>

@section('door')
@show

@section('input')
@show



{{--{{ $slot }}--}}

<footer class="myfond1 mt-5">
    <div class="container ">
        <hr>
        <p>2023 Дипломная работа Сиренко И.А.</p>
    </div>
</footer>

<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

</body>
</html>



