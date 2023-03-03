@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <p class="badge bg-dark">Categoría: {{$category->name}}</p>
            <h1>{{$article->title}}</h1>
            <a href="#more" class="btn-primary btn">Leer Más</a>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url("/imgs/" . $article->image)}}" alt="{{$article->image_alt}}" class="hero-img">
        </div>
    </section>

    <section id="more" class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-12">
            <p>{{$article->description}}</p>
        </div>
    </section>


@stop
