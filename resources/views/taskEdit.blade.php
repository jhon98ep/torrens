@extends('home')

@section('content-inicio')
    <h2>Crear Tarea</h2>
    <form style="white-space: normal; width: 60%;" method="post" action="/tareas/{{$id}}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre de la tarea</label>
        <input type="text" class="form-control" value="{{ $tarea->name }}" id="name" name="name">
    
        <label for="description">Descripcion de la tarea</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $tarea->description }}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
</form>
@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

@endsection