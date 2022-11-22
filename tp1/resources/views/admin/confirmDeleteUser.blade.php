@extends('layout')

@section('content')

    <section class="row pt-5 pb-5 align-items-center g-5">
        <h1>Estás seguro que querés eliminar el usuario {{$user['name']}}?</h1>
        <ul>
            <li>Nombre: {{$user->name}}</li>
            <li>Email: {{$user->email}}</li>
            <li>Servicio contratado: {{$user->contractedService->name ?? 'Sin servicio contratado'}}</li>
        </ul>
        <div class="btn-container d-flex gap-2">
            <a href="{{route('usersAdmin')}}" class="btn btn-primary">No, volver</a>
            <form action="{{route('admin.deleteUser', $user->id)}}" method="POST">
                @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            </form>
        </div>
    </section>

@stop
