@extends('plantilla')

@section('content')

<p>
    <a href="/add-rol" class="btn btn-success" role="button" aria-pressed="true">Agregar</a>
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
        </tr>
    </thead>
    <tbody>

        @foreach($roles as $rol)

        <tr>
            <td>{{ $rol->id }}</td>
            <td>{{ $rol->name }}</td>
            <td><a href="/roles/edit/{{ $rol->id }}"><i class="btn btn-warning fas fa-edit"></i></a> </td>
            <td>
                <form action="{{ url('roles', $rol->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="btn btn-danger fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>

        @endforeach


    </tbody>
</table>

@endsection