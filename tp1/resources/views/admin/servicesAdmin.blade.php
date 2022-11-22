@extends('layout')

@section('content')

<section id="servicios">
    <h1>Administrar Servicios</h1>
    <a class="btn btn-primary mb-5 mt-2" href="{{route('admin.newService')}}">Nuevo Servicio</a>
    <table class="table table-responsive-md table-hover mb-5">
        <thead>
            <tr class="align-items-center">
                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr class="align-items-center">
                    <td><img class="admin-img" src="{{url('/imgs/' . $service->image)}}" alt="{{$service->image_alt}}"></td>
                    <td><p>{{$service->name}}</p></td>
                    <td><p>$ {{$service->price}}</p></td>
                    <td>
                        <a href="{{route('admin.editService', $service->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{route('admin.confirmDeleteService', $service->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
    </table>
</section>

@stop
