@extends('layout')

@section('content')

<section class="row pt-5 pb-5 align-items-center g-5">
<h1 class="mt-5">Editar datos de perfil</h1>
<form action="{{route('profile.update')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label
        @error('name')
            text-danger
        @enderror
        ">Nombre</label>
        <input type="text" value="{{$user['name']}}" class="form-control
        @error('name')
            border border-danger
        @enderror
        " id="name" name="name"
        @error('name')
            aria-describedby="nameError"
        @enderror
        >
        @error('name')
            <div id="nameError" class="text-danger">{{$message}}</div>
        @enderror
        
    </div>

    <div class="mb-3">
        <label for="email" class="form-label
        @error('email')
            text-danger
        @enderror
        ">Email</label>
        <input type="email" value="{{$user['email']}}" class="form-control
        @error('email')
            border border-danger
        @enderror
        " id="email" name="email"
        @error('email')
            aria-describedby="emailError"
        @enderror
        >
        @error('email')
            <div id="emailError" class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label
        @error('password')
            text-danger
        @enderror
        ">Contraseña</label>
        <input type="password" class="form-control
        @error('password')
            border border-danger
        @enderror
        " id="password" name="password"
        @error('password')
            aria-describedby="passwordError"
        @enderror
        >
        @error('password')
            <div id="passwordError" class="text-danger">{{$message}}</div>
        @enderror
    </div>  
    
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</section>
@stop

