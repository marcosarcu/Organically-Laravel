@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Panel de Administración</h1>
            <div class="btn-container d-flex gap-2">
                <a href="{{route('servicesAdmin')}}" class="btn btn-outline-primary">Administrar Servicios</a>
                <a href="{{route('usersAdmin')}}" class="btn btn-secondary">Administrar Usuarios</a>
                <a href="{{route('articlesAdmin')}}" class="btn btn-primary">Administrar Blog</a>
            </div>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/admin.svg')}}" alt="" class="hero-img">
        </div>
    </section>





    {{-- <pre>
        {{print_r($articles)}}
    </pre> --}}


@stop
