<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}
    {{-- link tailwinds --}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    @vite('resources/css/app.css')
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div>
        {{-- NAV --}}
        <section>
            @include('layouts._partials.nav')
        </section>
    
       
    </div>
    @yield('content')

    {{-- añadir footer  --}}
    @include('layouts._partials.footer')
</body>
</html>