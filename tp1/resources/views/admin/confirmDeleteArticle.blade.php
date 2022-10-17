@extends('layout')

@section('content')
    <h1>Estás seguro que querés eliminar el articulo {{$article['title']}}?</h1>
    <form action="{{route('admin.deleteArticle', $article->id)}}" method="POST">
        @csrf
    <button type="submit" class="btn btn-danger">Sí, eliminar</button>
@stop
