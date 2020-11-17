<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>
    <style>
        .border{
        border-color:black!important;
    }
    *{
        border-color:black; 
    }
        h1 img {
            width: 80px;
            height: 80px;
        }
        input{
            background-color: black;
        }
    </style>
    <div id="app" style="background-color: black; min-height:722px">
        <section class="px-8 py-4 mb-4">
            <header class="container mx-auto">
                <h1>
                    <img src="{{url('public/images/logo.jpeg')}}" style="background-color: black" alt="">
                </h1>
            </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto rounded pt-6 mt-4"  style="background-color: yellow">
                @yield('content')
            </main>
        </section>
    </div>
</body>

</html>