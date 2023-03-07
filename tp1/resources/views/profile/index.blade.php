@extends('layout')

@section('content')

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Tu perfil</h1>
            <p>¡Bienvenido a tu perfil! Aquí podrás ver tus servicios contratados y tus datos personales.</p>
            <ul>
                <li>Nombre: {{$user->name}}</li>
                <li>Email: {{$user->email}}</li>
            </ul>
            <a class="btn btn-primary mb-3" href="{{route('profile.edit')}}">Cambiar datos</a>
            <ul>
                <li>{{$user->contracted_service_id ?? "No tenés ningún servicio contratado."}}</li>
                @if($user->contracted_service_at)
                    <li>Plan contratado el {{\Carbon\Carbon::parse($user->contracted_service_at)->format('d/m/Y')}}.</li>
                    <li>Tu plan finaliza el {{\Carbon\Carbon::parse($user->contracted_service_at)->addMonth()->format('d/m/Y')}}.</li>
                
                @endif
            </ul>
            @if($user->contracted_service_at)
                <a class="btn btn-primary" href="">Gestionar plan</a>
            @else
                <a class="btn btn-primary" href="{{route('home')}}#precios">Contratar plan</a>
            @endif
            
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/profile.svg')}}" class="hero-img">
        </div>
    </section>

@stop

