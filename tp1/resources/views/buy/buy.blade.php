@extends('layout')

@push('scripts')

<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const mp = new MercadoPago('{{$public_key}}', {
        locale: 'es-AR'
    });
    mp.checkout({
        preference: {
            id: '{{ $preference->id }}'
        },
        render: {   
            container: '.cho-container', 
            label: 'Pagar', 
        }
    });
</script>

@endpush

@section('content')

    <section class="row pt-5 pb-5 align-items-center g-5">
        <div class="col-md-6">
            <h1>Contratá el plan {{$service->name}}</h1>
            <p>{{$service->description}}</p>
            <p class="fw-bold">Precio: ${{$service->price}} por mes.</p>
            <p>Desde {{\Carbon\Carbon::now()->format('d/m/Y')}} hasta {{\Carbon\Carbon::now()->addMonth()->format('d/m/Y')}}</p>
            <div class="cho-container"></div>
        </div>
        <div class="col-md-6 order-first order-md-last d-flex">
            <img src="{{url('/imgs/' . $service->image)}}" alt="{{$service->image_alt}}" class="hero-img">
        </div>
    </section>

@stop

