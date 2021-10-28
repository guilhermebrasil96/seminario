@extends('plantilla')

@section('content')
    <div class="container">

        <div class="col-md-12">
            <div class="box">

                <div class="card-body">
                    <form method="POST" action="{{ route('registrar-rol') }}" class="mb-5">
                        @csrf
                        <div class="row">
                           
                            <div class="col-md-3 form-group">
                                <label for="nameRol" class="col-form-label">Nombre:</label>
                                <input id="nameRol" name="nameRol" type="text"
                                    class="form-control" required>
                            </div>

                            <div class="col-md-12 form-group">
                               <input type="submit" class="btn btn-danger form-control"
                                value="{{ __('Registrar un nuevo Rol') }}">
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>      
    </div>
    
@endsection
