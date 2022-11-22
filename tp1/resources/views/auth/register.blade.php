@extends('layout')

@section('content')

<div class="row">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('register')}}" method="POST">
        @csrf
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nombre">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Contraseña">
        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña">
        <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
    </form>
</div>

@stop
