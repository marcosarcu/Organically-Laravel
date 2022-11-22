@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center g-5">
        <h1>Estás seguro que querés eliminar el servicio {{$service['name']}}?</h1>
        <ul>
            <li>Nombre: {{$service->name}}</li>
            <li>Descripción: {{$service->description}}</li>
            <li>Precio: {{$service->price}}</li>
        </ul>
        <div class="btn-container d-flex gap-2">
            <a href="{{route('servicesAdmin')}}" class="btn btn-primary">No, volver</a>
            <form action="{{route('admin.deleteService', $service->id)}}" method="POST">
                @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            </form>
        </div>
    </section>
@stop
