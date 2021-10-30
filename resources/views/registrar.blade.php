@extends('plantilla')

@section('content')
    <div class="container">

        <div class="col-md-12">
            <div class="box">

                <div class="card-body">
                    <form method="POST" action="{{ route('new-bom') }}" class="mb-5">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label for="codigo" class="col-form-label">Código:</label>
                                <input id="codigo" name="codigo" value="{{ old('codigo') }}" type="text" class="form-control @error('codigo') is-invalid @enderror" autocomplete="codigo">
                                @error('codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3 form-group">
                                <label for="user_name" class="col-form-label">Nombre de Usuario:</label>
                                <input id="user_name" name="user_name" value="{{ old('user_name') }}" type="text"
                                    class="form-control @error('user_name') is-invalid @enderror" required
                                    autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3 form-group">
                                <label for="name" class="col-form-label">Nombre:</label>
                                <input id="name" name="name" value="{{ old('name') }}" type="text"
                                    class="form-control @error('name') is-invalid @enderror" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="last_name" class="col-form-label">Apellidos:</label>
                                <input id="last_name" name="last_name" value="{{ old('last_name') }}" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror" required
                                    autocomplete="last_name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="sex" class="col-form-label">Sexo:</label>
                                <select required name="sex" id="sex"
                                    class="form-control @error('sex') is-invalid @enderror">
                                    <option value="1" @if (old('sex') == '1') {{ 'selected' }} @endif>Masculino</option>
                                    <option value="2" @if (old('sex') == '2') {{ 'selected' }} @endif>Femenino</option>
                                </select>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="born_date" class="col-form-label">Fecha de nacimiento:</label>
                                <input id="born_date" name="born_date" value="{{ old('born_date') }}" type="date"
                                    class="form-control @error('born_date') is-invalid @enderror" required
                                    autocomplete="born_date">

                                @error('born_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-3 form-group">
                                <label for="email" class="col-form-label">Correo Electrónico:</label>
                                <input id="email" name="email" value="{{ old('email') }}" type="email"
                                    class="form-control @error('email') is-invalid @enderror" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3 form-group">
                                <label for="dpi" class="col-form-label">DPI:</label>
                                <input id="dpi" name="dpi" value="{{ old('dpi') }}" type="number"
                                    class="form-control @error('dpi') is-invalid @enderror" required autocomplete="dpi">

                                @error('dpi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <div class="col-md-3 form-group">
                                <label for="tel1" class="col-form-label">Telefono de contacto 1:</label>
                                <input id="tel1" name="tel1" value="{{ old('tel1') }}" type="number"
                                    class="form-control @error('tel1') is-invalid @enderror" required autocomplete="tel1">

                                @error('tel1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="tel2" class="col-form-label">Telefono de contacto 2:</label>
                                <input id="tel2" name="tel2" value="{{ old('tel2') }}" type="number"
                                    class="form-control @error('tel2') is-invalid @enderror" required autocomplete="tel2">

                                @error('tel2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-3 form-group">
                                <label for="foto" class="col-form-label">Foto:</label>
                                <input id="foto" name="foto" value="{{ old('foto') }}" type="file"
                                    class="form-control @error('foto') is-invalid @enderror" required autocomplete="foto">

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-3 form-group">
                                <label for="password" class="col-form-label">Contraseña:</label>
                                <input id="password" name="password" value="{{ old('password') }}" type="password"
                                    class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-3 form-group">
                                <label for="password-confirm" class="col-form-label">Confirmar la Contraseña:</label>
                                <input id="password-confirm" name="password_confirmation" value="" type="password"
                                    class="form-control" required autocomplete="new-password">

                               
                            </div>
{{-- esta parte debe habilitarse para ingresar un rol --}}
{{-- los roles son 1) bombero 2) administrador y deberian ser implementados con spatie  --}}
                            <div class="col-md-3 form-group">
                                <label for="rol" class="col-form-label">Rol:</label>
                                <select required name="rol" id="rol"
                                    class="form-control @error('rol') is-invalid @enderror">
                                    @foreach($roles as $rol)
                                    <option value="{{ $rol->name }}"> {{ $rol->name }}</option>
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
                                value="{{ __('Registrar un nuevo Bombero') }}">
                            </div>

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


                        </div>
                    </form>
                </div>
            </div>
        </div>      
    </div>
    
@endsection
