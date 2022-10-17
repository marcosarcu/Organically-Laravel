@extends('layout')

@section('content')
    <h1>Estás seguro que querés eliminar el servicio {{$service['name']}}?</h1>
    <form action="{{route('admin.deleteService', $service->id)}}" method="POST">
        @csrf
    <button type="submit" class="btn btn-danger">Sí, eliminar</button>
@stop
