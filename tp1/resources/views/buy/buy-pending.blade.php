@extends('layout')

@section('content')



    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Pago pendiente</h1>
            <p>El pago se encuentra pendiente. Por favor, revisá tu cuenta de Mercado Pago.</p>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/pending.svg')}}" class="hero-img">
        </div>
    </section>

@stop

