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

{{--            @include('layouts.menu')--}}
            <div>
                <x-menu.top-menu></x-menu.top-menu>
            </div>

            <div class="">
                <div class="row">
                    {{--    Sidebar--}}
                    <div class="col-2 myfond3 mycolor ">
{{--                        <x-menu.sidebar></x-menu.sidebar>--}}

                    </div>

                    {{-- Content --}}
                    <div class="col-10 myfond2">
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>


    </body>

    <x-footer />

</html>


{{--

<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>--}}
