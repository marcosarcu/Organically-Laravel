@extends('layout')

@section('content')
        <section class="row pt-5 pb-5 align-items-center g-5">
            <div class="col-md-6">
                <h1>Administrar redes sociales nunca fue tan fácil</h1>
                <p>Sabemos lo dificil que puede ser gestionar las diferente redes sociales de una marca. Por eso te venimos a ayudar.</p>
                <p>Con nuestra plataforma vas a poder gestionar tus redes sociales de una manera sencilla y rápida.</p>
                <div class="btn-container d-flex gap-2">
                    <a href="" class="btn btn-outline-primary">Conocé Más</a>
                    <a href="" class="btn btn-primary">Empezá Ya</a>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last d-flex">
                <img src="{{url('/imgs/hero.svg')}}" alt="" class="hero-img">
            </div>
        </section>

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h2>Gestioná todas tus redes desde un solo lugar</h2>
            <p>Desde nuestra plataforma podrás administrar todos tus perfiles desde un mismo lugar. Tendrás acceso a una <b>bandeja de entrada unificada y podrás programar contenido en todos tus perfiles facilmente.</b></p>
            <div class="btn-container d-flex gap-2">
                <a href="" class="btn btn-primary">Empezá Ya</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-first d-flex">
            <img src="{{url('/imgs/manage.svg')}}" alt="" class="hero-img">
        </div>
    </section>

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h2>Obtené la ayuda y asesoramiento de expertos</h2>
            <p>Nuestro sistema es <b>muy fácil de usar y esta repleto de tips para ayudarte a crecer más rapido.</b></p>
            <p>Además, tendrás acceso a nuestro <b>equipo de expertos que estan para ayudarte con cualquier duda.</b></p>
            <div class="btn-container d-flex gap-2">
                <a href="" class="btn btn-primary">Empezá Ya</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/help.svg')}}" alt="" class="help-img">
        </div>
    </section>

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-12">
            {{-- Pricing options --}}
            <h2 class="text-center">Conocé nuestros planes</h2>
            <div class="pricing-container">
                @foreach ($services as $service)
                <div class="card">
                    <img class="card-img-top" src="{{url('/imgs/' . $service->image)}}" alt="">
                    <div class="card-body">
                        <h3 class="card-title">{{$service->name}}</h3>
                        <p>{{$service->description}}</p>
                        <div class="price">{{$service->price}}</div>
                        <div class="btn-container d-flex gap-2">
                            <a href="" class="btn btn-primary">Empezá Ya</a>
                        </div>
                    </div>
                </div>
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
                                <p class="card-text">"Me encanta esta plataforma. Es muy fácil de usar y me ayuda a gestionar mis redes sociales de una manera muy sencilla."</p>
                                <p class="card-text">- Juan Perez</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
