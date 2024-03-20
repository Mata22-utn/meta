@extends('admin/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')

<div class="card">
  <h5 class="card-header">CRUD ""con Laravel 8 MySQL</h5>
  <div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
        {{( $mensaje )}}
</div>
@endif
        </div>
    </div>
    <h5 class="card-title">Listado de personas en el sistema</h5>
    <p>
        <a href="{{ route("personas.create") }}" class="btn btn-primary"><span class="fa-solid fa-user-plus"></span> Agregar nueva persona</a>

            <a href="{{ route("login.index")}}" class="btn btn-outline-danger">Salir</a>
    </p>
    <hr>
    <p class="card-text">
        <div class="table table-responsive">
            <table class='table table-sm table-bordered'>
                <thead>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de nacimientos</th>
                    <th>Password</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach ($datos as $item) 
                    <tr>
                        <td>{{ $item->nombres}}</td>
                        <td>{{ $item->apellidos}}</td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td>{{ $item->password}}</td>
                            <td>
                            <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                            <button class="btn btn-warning btn-sm">

                            </button>    
                            </form>

                        </td>
                        <td>
                            <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                <button class="btn btn-danger btn-sm">
                                    <span class=""></span>                                
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </p>
    
  </div>
</div>

@endsection