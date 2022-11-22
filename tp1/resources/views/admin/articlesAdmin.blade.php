@extends('layout')

@section('content')

<section id="blog">
    <h1>Administrar Noticias</h1>
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
                    <td><img class="admin-img" src="{{url('/imgs/' . $article->image)}}" alt="{{$article->image_alt}}"></td>
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

@stop
