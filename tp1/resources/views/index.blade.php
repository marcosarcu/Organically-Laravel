@extends('layout')

@section('content')
        <section class="row pt-5 pb-5 align-items-center g-5">
            <div class="col-md-6">
                <h1>Administrar redes sociales nunca fue tan fácil</h1>
                <p>Sabemos lo difícil que puede ser gestionar las diferentes redes sociales de una marca. Por eso te venimos a ayudar.</p>
                <p>Con nuestra plataforma vas a poder gestionar tus redes sociales de una manera sencilla y rápida.</p>
                <div class="btn-container d-flex gap-2">
                    <a href="#more" class="btn btn-outline-primary">Conocé Más</a>
                    <a href="#precios" class="btn btn-primary">Empezá Ya</a>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last d-flex">
                <img src="{{url('/imgs/hero.svg')}}" class="hero-img">
            </div>
        </section>

    <section id="more" class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h2>Gestioná todas tus redes desde un solo lugar</h2>
            <p>Desde nuestra plataforma podrás administrar todos tus perfiles desde un mismo lugar. Tendrás acceso a una <b>bandeja de entrada unificada y podrás programar contenido en todos tus perfiles fácilmente.</b></p>
            <div class="btn-container d-flex gap-2">
                <a href="#precios" class="btn btn-primary">Empezá Ya</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-first d-flex">
            <img src="{{url('/imgs/manage.svg')}}" class="hero-img">
        </div>
    </section>

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h2>Obtené la ayuda y asesoramiento de expertos</h2>
            <p>Nuestro sistema es <b>muy fácil de usar y está repleto de tips para ayudarte a crecer más rápido.</b></p>
            <p>Además, tendrás acceso a nuestro <b>equipo de expertos que estan para ayudarte con cualquier duda.</b></p>
            <div class="btn-container d-flex gap-2">
                <a href="#precios" class="btn btn-primary">Empezá Ya</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/help.svg')}}" class="help-img">
        </div>
    </section>

    <section id="precios" class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-12">
            <h2 class="text-center">Conocé nuestros planes</h2>
            <div class="cards-container">
                @foreach ($services as $service)
                <article class="card">
                    <img class="card-img-top" src="{{url('/imgs/' . $service->image)}}" alt="{{$service->image_alt}}">
                    <div class="card-body">
                        <h3 class="card-title">{{$service->name}}</h3>
                        <p>{{$service->description}}</p>
                        <div class="price">${{$service->price}} <small>/mes</small></div>
                        <div class="btn-container d-flex gap-2">
                            <a href="{{route('buy', $service->id)}}" class="btn btn-primary">Contratar ahora</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>



    </section>

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-12">
            <h2 class="text-center">¿Qué dicen nuestros clientes?</h2>
            <p class="text-center">Estos son algunos de los comentarios que nuestros clientes nos han dejado.</p>
            <div class="container-fluid testimonial-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Me encanta esta plataforma. Es muy fácil de usar y me ayuda a gestionar mis redes sociales de una manera muy sencilla."</p>
                                <p class="card-text">- Juan Perez</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Gracias a Organically pude crecer orgánicamente y aumentar mis ventas"</p>
                                <p class="card-text">- Carla Rodriguez</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="row pt-5 pb-5 align-items-center g-2">
        <h2>Nuestro Blog</h2>
        <p>Lee nuestro Blog con las últimas noticias, eventos y tutoriales.</p>
        <div class="cards-container">
                @foreach ($articles as $article)
                    <article class="card">
                        <img class="card-img-top" src="{{url('/imgs/' . $article->image)}}" alt="{{$article->image_alt}}">
                        <div class="card-body">
                            <h3 class="card-title">{{$article->title}}</h3>
                            <p>{{$article->description}}</p>
                            <div class="btn-container d-flex gap-2">
                                <a href="{{route('blog.show', $article->id)}}" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </article>
                @endforeach
        </div>

        <div class="pt-5 pb-5 align-items-center">
            <h3 class="text-center">Ver todos los artículos</h3>
            <a href="{{route('blog')}}" class="btn btn-primary centerbtn">Ver más</a>
        </div>

    </section>



@stop
