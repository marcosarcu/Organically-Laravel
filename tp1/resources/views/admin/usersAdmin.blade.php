@extends('layout')

@section('content')

<section id="usuarios">
    <h1>Administrar Usuarios</h1>

    <table class="table table-responsive-md table-hover mb-5">
        <thead>
            <tr class="align-items-center">
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Servicio Contratado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="align-items-center">
                    <td><p>{{$user->name}}</p></td>
                    <td><p>{{$user->email}}</p></td>
                    <td>{{$user->contractedService->name ?? 'Sin servicio contratado' }}</td>
                    <td>
                        @if($user->admin)
                            <form action="{{route('admin.removeAdmin', $user->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Quitar Admin</button>
                            </form>
                        @else
                            <form action="{{route('admin.makeAdmin', $user->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning">Hacer Admin</button>
                            </form>
                        @endif
                        <a href="{{route('admin.confirmDeleteUser', $user->id)}}" class="btn btn-danger mt-2">Eliminar</a>
                    </td>
                </tr>
            @endforeach
    </table>
</section>

@stop
