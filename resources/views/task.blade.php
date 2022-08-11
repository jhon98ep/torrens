@extends('home')

@section('content-inicio')
    <h2>Tareas</h2>
    <a href="/tareas/create" class="btn btn-primary btn-sm">Nueva Tarea</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Asignada</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $item)
            <tr style="white-space: normal;">
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->nameUs }}</td>
                <td>
                <div class="btn-group">
                    <a href="/tareas/{{$item->id}}/edit" class="btn btn-primary"><i><svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#pencil"/></svg></i></a>
                    <a href="/tareas/{{$item->id}}/delete" class="btn btn-danger"><i><svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#trash"/></svg></i></a>
                </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection