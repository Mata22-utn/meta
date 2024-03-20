@extends('admin.plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Eliminar un Usuario!</h5>
  <div class="card-body">
    
  
    <p class="card-text">
    <div class="alert alert-danger" role="alert">
  Estas Seguro de Eliminar este Registro!!!

  <table class="table table-sm table-hover table-bordered" style="background-color: white">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de nacimiento</th>
        <th>Password</th>
    </thead>
    <tr>
        <td>{{$personas->nombres}}</td>
        <td>{{$personas->apellidos}}</td>
        <td>{{$personas->fecha_nacimiento}}</td>
        <td>{{$personas->password}}</td>
    </tr>
  </table>
  <hr>
  <form action="{{ route('personas.destroy' , $personas->id) }}" method="POST"> 
    @csrf  
    @method('DELETE')
    <a href="{{route('personas.index')}}" class="btn btn-info">Regresar</a>
    <button class="btn btn-danger">Eliminar</button>
</div>
    </p>
    
  </div>
</div>
@endsection
