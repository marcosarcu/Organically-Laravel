@extends('layout')

@section('content')

<section class="row pt-5 pb-5 align-items-center g-5">
    <div class="col-md-12">
        <h1>Nuestro blog</h1>
    </div>
</section>

<div class="cards-container pt-5 pb-5">
    @foreach ($articles as $article)
        <article class="card">
            <img class="card-img-top" src="{{url('/imgs/' . $article->image)}}" alt="">
            <div class="card-body">
                <h3 class="card-title">{{$article->title}}</h3>
                <p>{{$article->description}}</p>
                <div class="btn-container d-flex gap-2">
                    <a href="{{route('blog.show', $article->id)}}" class="btn btn-primary">Leer más</a>
                </div>
        </article>
    @endforeach
</div>

@stop
