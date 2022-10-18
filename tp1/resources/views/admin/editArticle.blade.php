@extends('layout')

@section('content')

<section class="row pt-5 pb-5 align-items-center g-5">
<h1 class="mt-5">Editar Articulo</h1>
<form action="{{route('admin.updateArticle', $article->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label
        @error('title')
            text-danger
        @enderror
        ">Titulo</label>
        <input type="text" value="{{$article['title']}}" class="form-control
        @error('title')
            border border-danger
        @enderror
        " id="title" name="title"
        @error('title')
            aria-describedby="titleError"
        @enderror
        >
        @error('title')
            <div id="titleError" class="text-danger">{{$message}}</div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="description" class="form-label
        @error('description')
            text-danger
        @enderror
        ">Contenido</label>
        <textarea class="form-control
        @error('description')
            border border-danger
        @enderror
        " id="description" name="description" rows="3"
        @error('description')
            aria-describedby="descriptionError"
        @enderror
        >{{$article['description']}}</textarea>
        @error('description')
            <div id="descriptionError" class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label
        @error('category_id')
            text-danger
        @enderror
        ">Categoria</label>
        <select class="form-select
        @error('category_id')
            border border-danger
        @enderror
        " id="category" name="category_id"
        @error('category_id')
            aria-describedby="categoryError"
        @enderror
        >
            <option value="0">Seleccione una categoria</option>
            @foreach ($categories as $category)
                <option
                value="{{$category->id}}"
                @if($category->id == $article->category_id)
                    selected
                @endif
                >{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div id="categoryError" class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <p class="form-label">Imagen actual</p>
        <img src="{{url('/imgs/' . $article['image'])}}" alt="" width="200px">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label
        ">Imagen</label>
        <input type="file" class="form-control
        " id="image" name="image"
        >
    </div>

    <div class="mb-3">
        <label for="image-alt" class="form-label">
            Descripción de la imagen
        </label>
        <input type="text" class="form-control" value={{$article['image_alt']}} id="image-alt" name="image_alt">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</section>
@stop

