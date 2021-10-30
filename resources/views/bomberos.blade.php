@extends('plantilla')

@section('content')

<p>
    <a href="/registrar" class="btn btn-success" role="button" aria-pressed="true">Agregar</a>
</p>

@if (\Session::has('success'))
<div class="alert alert-success">
    <span>{!! \Session::get('success') !!}</span>
</div>
@endif

@if (\Session::has('error'))
<div class="alert alert-danger">
    <span>{!! \Session::get('error') !!}</span>
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Codigo</th>
            <th>Nombre de usuario</th>
            <th>Sexo</th>
            <th>Fecha nacimiento</th>
            <th>Correo</th>
            <th>DPI</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
        </tr>
    </thead>
    <tbody>

        @foreach($bomberos as $bombero)

        <tr>
            <td>{{ $bombero->id }}</td>
            <td>{{ $bombero->nombre }}</td>
            <td>{{ $bombero->apellidos }}</td>
            <td>{{ $bombero->codigo }}</td>
            <td>{{ $bombero->usuario }}</td>
            <td>@if ($bombero->sexo == '1') {{ 'Masculino' }} @elseif ($bombero->sexo == '2') {{ 'Femenino' }} @endif </td>
            <td>{{ $bombero->birthday }}</td>
            <td>{{ $bombero->correo }}</td>
            <td>{{ $bombero->dpi }}</td>
            <td>{{ $bombero->telefono1 }}</td>
            <td>{{ $bombero->telefono2 }}</td>
            <td>
                <a href="/bomberos/edit/{{ $bombero->id }}"><i class="btn btn-warning fas fa-edit"></i></a> 
            </td>
            <td>
                <form action="{{ url('bomberos', $bombero->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="btn btn-danger fas fa-trash-alt"></i></button>
                </form>
        </tr>

        @endforeach


    </tbody>
</table>

@endsection