@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Panel de Administración</h1>
            <div class="btn-container d-flex gap-2">
                <a href="#servicios" class="btn btn-outline-primary">Administrar servicios</a>
                <a href="#blog" class="btn btn-primary">Administrar Blog</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/admin.svg')}}" alt="" class="hero-img">
        </div>
    </section>

    <section id="servicios">
        <h2>Administrar Servicios</h2>
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
                        <td><img class="admin-img" src="{{'./imgs/' . $service->image}}" alt="{{$service->image_alt}}"></td>
                        <td><p>{{$service->name}}</p></td>
                        <td><p>{{$service->price}}</p></td>
                        <td>
                            <a href="{{route('admin.editService', $service->id)}}" class="btn btn-primary">Editar</a>
                            <a href="{{route('admin.confirmDeleteService', $service->id)}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
        </table>
    </section>

    <section id="blog">
        <h2>Administrar Noticias</h2>
        <a class="btn btn-primary mb-5 mt-2" href="{{route('admin.newArticle')}}">Nueva Noticia</a>
        <table class="table table-responsive-md table-hover mb-5">
            <thead>
                <tr class="align-items-center">
                    <th scope="col">Imagen</th>
                    <th scope="col">Título</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="align-items-center">
                        <td><img class="admin-img" src="{{'./imgs/' . $article->image}}" alt="{{$article->image_alt}}"></td>
                        <td><p>{{$article->title}}</p></td>
                        <td>{{$article->category->name}}</td>
                        <td>
                            <a href="{{route('admin.editArticle', $article->id)}}" class="btn btn-primary">Editar</a>
                            <a href="{{route('admin.confirmDeleteArticle', $article->id)}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
        </table>
    </section>

    {{-- <pre>
        {{print_r($articles)}}
    </pre> --}}


@stop
