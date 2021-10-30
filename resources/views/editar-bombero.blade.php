@extends('plantilla')

@section('content')

<div class="col-12">
    @foreach($bomberos as $bombero)
    <form method="post" action="/bomberos/{{ $bombero->id }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="codigo" class="col-form-label">Código:</label>
                <input id="codigo" name="codigo" type="text" class="form-control" autocomplete="codigo" value="{{$bombero->codigo}}">
            </div>

            <div class="col-md-3 form-group">
                <label for="user_name" class="col-form-label">Nombre de Usuario:</label>
                <input id="user_name" name="user_name" value="{{ $bombero->usuario }}" type="text"
                    class="form-control" required>

            </div>

            <div class="col-md-3 form-group">
                <label for="name" class="col-form-label">Nombre:</label>
                <input id="name" name="name" value="{{ $bombero->nombre }}" type="text"
                    class="form-control" required>
            </div>

            <div class="col-md-3 form-group">
                <label for="last_name" class="col-form-label">Apellidos:</label>
                <input id="last_name" name="last_name" value="{{ $bombero->apellidos }}" type="text"
                    class="form-control" required>

            </div>


            <div class="col-md-3 form-group">
                <label for="sex" class="col-form-label">Sexo:</label>
                <select required name="sex" id="sex"
                    class="form-control @error('sex') is-invalid @enderror">
                    <option value="1" @if ($bombero->sexo == '1') {{ 'selected' }} @endif>Masculino</option>
                    <option value="2" @if ($bombero->sexo == '2') {{ 'selected' }} @endif>Femenino</option>
                </select>

            </div>

            <div class="col-md-3 form-group">
                <label for="born_date" class="col-form-label">Fecha de nacimiento:</label>
                <input id="born_date" name="born_date" value="{{ $bombero->birthday }}" type="date"
                    class="form-control @error('born_date') is-invalid @enderror" required
                    autocomplete="born_date">

            </div>

            <div class="col-md-3 form-group">
                <label for="email" class="col-form-label">Correo Electrónico:</label>
                <input id="email" name="email" value="{{ $bombero->correo }}" type="email"
                    class="form-control @error('email') is-invalid @enderror" required autocomplete="email">

            </div>

            <div class="col-md-3 form-group">
                <label for="dpi" class="col-form-label">DPI:</label>
                <input id="dpi" name="dpi" value="{{ $bombero->dpi }}" type="number"
                    class="form-control @error('dpi') is-invalid @enderror" required autocomplete="dpi">

            </div>

            <div class="col-md-3 form-group">
                <label for="tel1" class="col-form-label">Telefono de contacto 1:</label>
                <input id="tel1" name="tel1" value="{{ $bombero->telefono1 }}" type="number"
                    class="form-control @error('tel1') is-invalid @enderror" required autocomplete="tel1">

            </div>

            <div class="col-md-3 form-group">
                <label for="tel2" class="col-form-label">Telefono de contacto 2:</label>
                <input id="tel2" name="tel2" value="{{ $bombero->telefono2 }}" type="number"
                    class="form-control @error('tel2') is-invalid @enderror" required autocomplete="tel2">

            </div>

            <div class="col-md-3 form-group">
                <label for="foto" class="col-form-label">Foto:</label>
                <input id="foto" name="foto" value="{{ old('foto') }}" type="file"
                    class="form-control @error('foto') is-invalid @enderror" required autocomplete="foto">

            </div>

            <div class="col-md-3 form-group">
                <label for="password" class="col-form-label">Nueva Contraseña:</label>
                <input id="password" name="password" type="password" value="{{ $bombero->password }}"
                    class="form-control">

            </div>

{{-- esta parte debe habilitarse para ingresar un rol --}}
{{-- los roles son 1) bombero 2) administrador y deberian ser implementados con spatie  --}}
            <div class="col-md-3 form-group">
                <label for="rol" class="col-form-label">Rol:</label>
                <select required name="rol" id="rol"
                    class="form-control @error('rol') is-invalid @enderror">
                    @foreach($roles as $rol)
                    <option value="{{ $rol->name }}"  @if ($bombero->rol == $rol->name) {{ 'selected' }} @endif> {{ $rol->name }}</option>
                    @endforeach
                </select>

                @error('rol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="col-md-12 form-group">
                <input type="submit" class="btn btn-danger form-control"
                value="{{ __('Actualizar Bombero') }}">
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