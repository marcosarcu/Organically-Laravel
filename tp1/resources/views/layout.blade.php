<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/imgs/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/imgs/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/imgs/favicon-16x16.png')}}">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <title>{{$title}}</title>
</head>
<body class="hero-bg">
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="{{route('home')}}"><img id="header-logo" src=" {{ url('/imgs/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item m-1">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Inicio</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{route('home')}}#precios">Precios</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="{{route('home')}}#blog">Novedades</a>
                </li>
                @guest
                    <li class="nav-item m-1">
                        <a class="btn btn-primary" href="{{route('login')}}">Iniciar sesion</a>
                    </li>
                @endguest
                @auth
                    @if(Route::is('admin'))
                        <li class="nav-item m-1">
                            <a class="btn btn-primary" href="{{route('home')}}">Ir al sitio</a>
                        </li>
                    @else
                        <li class="nav-item m-1">
                            <a class="btn btn-primary" href="{{route('admin')}}">Panel de administración</a>
                        </li>
                    @endif
                    <li class="nav-item m-1">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Cerrar sesión</button>
                        </form>
                    </li>
                @endauth

                </ul>
            </nav>
        </div>
    </header>
    @if(session('success'))
        <div class="container-md p-2 mt-2 mb-2 alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="container-md p-2 mt-2 mb-2 alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    <main class="container-md">
        @yield('content')
    </main>

    @if(Route::is('home') || Route::is('noticias'))
        <section class="container-fluid pt-5 pb-5 mt-3 bg-primary ">
            <h2 class="text-light text-center">Comenzá a usar Organically</h2>
            <p class="text-light text-center">¿Qué estás esperando para potenciar tu crecimiento orgánico?</p>
            <div class="btn-container d-flex gap-2 justify-content-center">
                <a href="" class="btn btn-light">Empezá Ya</a>
            </div>
        </section>
    @endif
    <footer class="bg-light">
        <div class="container-md">
            <div class="row">
                <p class="text-center m-1">&copy Marcos Arcusin - DWT4AV | Portales y Comercio Electrónico</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


