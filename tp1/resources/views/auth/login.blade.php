@extends('layout')

@section('content')
   <section class="row pt-5 pb-5">
    <h1>Iniciar Sesión</h1>
    <p>¿No tenés una cuenta? <a href="{{route('registerForm')}}">Crea una cuenta acá</a></p>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email"
            value="{{old('email')}}"
            >
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
        </form>
</section>


@stop
