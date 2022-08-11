@extends('home')

@section('content-inicio')
    <h2>Crear Tarea</h2>
    <form style="white-space: normal; width: 60%;" method="post" action="/tareas">
    @csrf
    <div class="form-group">
        <label for="name">Nombre de la tarea</label>
        <input type="text" class="form-control" id="name" name="name">
    
        <label for="description">Descripcion de la tarea</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    @if(Auth::user()->rol == 1)
    <div class="form-group">
        <label for="asignado">Usuario al que asignara la tarea</label>
        <select class="form-control" id="asignado" name="asignado">
            @foreach ($usuarios as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    @else
        <input id="asignado" name="asignado" type="hidden" value="{{Auth::user()->id}}">
    @endif
    <br>
    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
</form>
@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

@endsection