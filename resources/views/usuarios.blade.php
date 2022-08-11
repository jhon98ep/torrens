@extends('home')

@section('content-inicio')
    <h2>Usuarios</h2>
    <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 75%;overflow-y: scroll;">
        <table class="table table-bordered table-striped mb-0" style="margin-bottom: 0px;">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $item)
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td>{{ $item['name'] }} {{ $item['fullname'] }}</td>
                    <td width="50px">{{ $item['phone'] }}</td>
                    <td width="50px">{{ $item['email'] }}</td>
                    @if ($item['state'] == 0)
                    <td>false</td>
                    @elseif ($item['state'] == 1)
                    <td>true</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
@endsection