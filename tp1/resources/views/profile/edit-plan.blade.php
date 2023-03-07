@extends('layout')

@section('content')

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Tu plan actual es el {{$currentService->name}}</h1>
            <a href="{{route('profile.deletePlan')}}" class="btn btn-danger">Cancelar plan</a>
            <a href="#planes" class="btn btn-primary">Cambiar plan</a>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/plan.svg')}}" class="hero-img">
        </div>
    </section>

    <section id="planes" class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-12">
            <h2 class="text-center">Elegí tu nuevo plan</h2>
            <div class="cards-container">
                @foreach ($services as $service)
                <article class="card 
                    @if($service->id == $currentService->id)
                    disabledbutton
                    @endif
                    "
                >
                    <img class="card-img-top" src="{{url('/imgs/' . $service->image)}}" alt="{{$service->image_alt}}">
                    <div class="card-body">
                        <h3 class="card-title">{{$service->name}}</h3>
                        @if($service->id == $currentService->id)
                        <p class="card-text"><b>Plan actual</b></p>
                        @endif
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

@stop

