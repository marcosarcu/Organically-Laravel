@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center g-5">
        <h1>Estás seguro que querés eliminar el articulo {{$article['title']}}?</h1>
        <div class="btn-container d-flex gap-2">
            <a href="{{route('admin')}}" class="btn btn-primary">No, volver</a>
            <form action="{{route('admin.deleteArticle', $article->id)}}" method="POST">
                @csrf
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            </form>
        </div>
    </section>
@stop
