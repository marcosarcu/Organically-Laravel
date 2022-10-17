@extends('layout')

@section('content')
    <h1>Admin</h1>
    <p>Admin page</p>
    <a href="{{route('admin.newService')}}">Nuevo Servicio</a>
    <table class="table table-responsive-md table-hover mb-5">
        <thead>
            <tr class="align-items-center">
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr class="align-items-center">
                    <td><p>{{$service->name}}</p></td>
                    <td><p>{{$service->price}}</p></td>
                    <td><img class="img-fluid" src="{{'./imgs/' . $service->image}}" alt="{{$service->image_alt}}"></td>
                    <td>
                        <a href="{{route('admin.editService', $service->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
    </table>


@stop


{{--
            $table->string('name', 255);
            $table->string('short_description', 255);
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('image');
            $table->string('image_alt', 255);
    --}}
