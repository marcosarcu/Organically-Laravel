@extends('layout')

@section('content')
    <section class="row pt-5 pb-5 align-items-center">
        <h1>¿Estás seguro que querés cancelar la subscripción al plan {{$currentService['name']}}?</h1>
        <p>Vas a perder el acceso a los servicios contratados inmediatamente.</p>
        
        <div class="btn-container d-flex gap-2">
            <a href="{{route('profile.editPlan')}}" class="btn btn-primary">No, volver</a>
            <form action="{{route('profile.deletePlan')}}" method="POST">
                @csrf
            <button type="submit" class="btn btn-danger">Sí, cancelar</button>
            </form>
        </div>
    </section>
@stop
