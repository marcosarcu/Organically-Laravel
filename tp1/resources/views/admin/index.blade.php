@extends('layout')

@section('content')
    <h1>Admin</h1>
    <h2>Administrar Servicios</h2>
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
                        <a href="{{route('admin.confirmDeleteService', $service->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
    </table>
    <h2>Administrar Noticias</h2>
    <a href="{{route('admin.newArticle')}}">Nueva Noticia</a>
    <table class="table table-responsive-md table-hover mb-5">
        <thead>
            <tr class="align-items-center">
                <th scope="col">Título</th>
                <th scope="col">Imagen</th>
                <th scope="col">Categoría</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="align-items-center">
                    <td><p>{{$article->title}}</p></td>
                    <td><img class="img-fluid" src="{{'./imgs/' . $article->image}}" alt="{{$article->image_alt}}"></td>
                    <td>{{$article->category->name}}</td>
                    <td>
                        <a href="{{route('admin.editArticle', $article->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{route('admin.confirmDeleteArticle', $article->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach

    </table>

    {{-- <pre>
        {{print_r($articles)}}
    </pre> --}}


@stop
