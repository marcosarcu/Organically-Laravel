@extends('layout')

@section('content')



    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Pago Correcto</h1>
            <p>El pago se realizó correctamente. ¡Gracias por confiar en nosotros!</p>
            <a class="btn btn-primary" href="{{route('profile')}}">Ingresá a tu perfil</a>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/success.svg')}}" class="hero-img">
        </div>
    </section>

@stop

