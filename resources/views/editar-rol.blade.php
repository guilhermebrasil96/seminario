@extends('plantilla')

@section('content')

<div class="col-12">
    @foreach($roles as $rol)
    <form method="post" action="/roles/{{ $rol->id }}">
        @csrf
        @method('PATCH')
        <div class="row">

            <div class="col-md-3 form-group">
                <label for="nameRol" class="col-form-label">Nombre:</label>
                <input id="nameRol" name="nameRol" value="{{ $rol->name }}" type="text"
                    class="form-control" required>
            </div>

            <div class="col-md-12 form-group">
                <input type="submit" class="btn btn-danger form-control"
                value="{{ __('Actualizar Rol') }}">
            </div>


        </div>
    </form>
    <br>

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

    @endforeach
</div>

@endsection