@extends('plantilla')

@section('content')


    {{-- <div class="container"> --}}

    {{-- <div class="col-md-12">
            <div class="box">
{{}}
                <div class="card-body">

                    <form class="mb-1" action="">

                        <div class="row">

                            <div class="input-group">




                                <div class="col-md-3 form-group">

                                    <input name="busqueda" value="{{ $busqueda }}" type="search"
                                        class="form-control rounded" placeholder="Buscar..." aria-label="Search"
                                        aria-describedby="search-addon" />

                                </div>
                                <div class="col-md-9 form-group">
                                    <input value="Buscar" type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}






    <div class="card shadow mb-4">
        <div class="card-header py-3">


            <div class="col-md-12">
                <div class="box">

                    <div class="card-body">

                        <form class="mb-1" action="">

                            <div class="row">

                                <div class="input-group">


                                    {{-- <div class="col-md-3 form-group">
                                        <input name="busqueda" value="{{ $busqueda }}" type="search"
                                            class="form-control rounded" placeholder="Buscar..." aria-label="Search"
                                            aria-describedby="search-addon" />

                                    </div> --}}
                                    <div class="col-md-9 form-group">
                                        <input value="Buscar" type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                {{-- <th>Acciones</th> --}}
                                <th>Foto</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Nombre de usuario</th>
                                <th>Telefonos</th>
                                <th>Correo</th>
                                <th>DPI</th>
                                <th>Sexo</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tfoot>
                            @foreach ($usuarios as $bombero)
                                <tr>
                                    <td scope="row">

                                        <img class="img-thumbnail gg" width="60" src="{{ asset($bombero['foto']) }}"
                                            width="100" alt="">


                                    </td>
                                    
                                    <td>{{ $bombero['codigo'] }}</td>
                                    <td>{{ $bombero['name'] . ' ' . $bombero['last_name'] }}</td>
                                    <td>{{ $bombero['user_name'] }}</td>
                                    <td>{{ $bombero['tel1'] . ' - ' . $bombero['tel2'] }}</td>
                                    <td>{{ $bombero['email'] }}</td>
                                    <td>{{ $bombero['dpi'] }}</td>
                                    <td>@if ($bombero['sex'] == '1') Masculino @else Femenino @endif</td>
                                    <td>@if ($bombero['status'] == '1') Activo @else No activo @endif</td>



                                </tr>
                            @endforeach
                        </tfoot>

                    </table>
                    {{-- <div class=" text-center my-auto"> {{ $usuarios->links() }} --}}
                    </div>
                </div>
            </div>
        </div>



































































































    @endsection
    <script src="{{ asset('js/cargarimagen.js') }}"></script>
