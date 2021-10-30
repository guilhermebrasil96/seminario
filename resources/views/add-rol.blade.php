@extends('plantilla')

@section('content')
    <div class="container">

        <div class="col-md-12">
            <div class="box">

                <div class="card-body">
                    <form method="POST" action="{{ route('new-rol') }}" class="mb-5">
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
