@extends('layout')

@section('content')



    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Pago fallido</h1>
            <p>El pago no se pudo realizar. Por favor, intentá nuevamente.</p>
            <a class="btn btn-primary" href="{{route('home')}}#precios">Volver a intentar</a>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/fail.svg')}}" class="hero-img">
        </div>
    </section>

@stop

