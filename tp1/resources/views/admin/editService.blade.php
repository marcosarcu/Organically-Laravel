@extends('layout')

@section('content')
<section class="row pt-5 pb-5 align-items-center g-5">
    <h1 class="mt-5">Actualizar Servicio</h1>
    <form action="{{route('admin.updateService', $service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label
            @error('name')
                text-danger
            @enderror
            ">Nombre</label>
            <input type="text" value="{{$service['name']}}" class="form-control
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
            <label for="short_description" class="form-label
            @error('short_description')
                text-danger
            @enderror
            ">Descripción corta</label>
            <input type="text" value="{{$service['short_description']}}" class="form-control
            @error('short_description')
                border border-danger
            @enderror
            " id="short_description" name="short_description"
            @error('short_description')
                aria-describedby="short_descriptionError"
            @enderror
            >
            @error('short_description')
                <div id="short_descriptionError" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label
            @error('description')
                text-danger
            @enderror
            ">Descripción</label>
            <textarea value="{{$service['description']}}" class="form-control
            @error('description')
                border border-danger
            @enderror
            " id="description" name="description" rows="3"
            @error('description')
                aria-describedby="descriptionError"
            @enderror

            >{{$service['description']}}</textarea>
            @error('description')
                <div id="descriptionError" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label
            @error('price')
                text-danger
            @enderror
            ">Precio</label>
            <input type="number" step="0.01" value="{{$service['price']}}" class="form-control
            @error('price')
                border border-danger
            @enderror
            " id="price" name="price"
            @error('price')
                aria-describedby="priceError"
            @enderror
            >
            @error('price')
                <div id="priceError" class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <p class="form-label">Imagen actual</p>
            <img src="{{url('/imgs/' . $service['image'])}}" alt="{{$service['image_alt']}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label
            @error('image')
                text-danger
            @enderror
            ">Imagen</label>
            <input type="file" class="form-control
            @error('image')
                border border-danger
            @enderror
            " id="image" name="image">
            @error('image')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image_alt" class="form-label
            @error('image_alt')
                text-danger
            @enderror
            ">Texto alternativo de la imagen</label>
            <input type="text" value="{{$service['image_alt']}}" class="form-control
            @error('image_alt')
                border border-danger
            @enderror
            " id="image_alt" name="image_alt">
            @error('image_alt')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</section>
@stop
