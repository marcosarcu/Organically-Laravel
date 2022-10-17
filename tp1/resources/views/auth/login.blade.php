@extends('layout')

@section('content')
   <div class="row">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
        </form>
   </div>


@stop
