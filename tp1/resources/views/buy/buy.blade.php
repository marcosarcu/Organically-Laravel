@extends('layout')

@section('content')

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Contratá el servicio {{$service->name}}</h1>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/' . $service->image)}}" alt="{{$service->image_alt}}" class="hero-img">
            
        </div>
    </section>

@stop