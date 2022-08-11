@extends('home')

@section('content-inicio')
    <h2>Tareas</h2>
    <a href="/notas/create" class="btn btn-primary btn-sm">Nueva Tarea</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection