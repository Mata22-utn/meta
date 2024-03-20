@extends('admin.plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <h5 class="card-header bg-danger text-white">Agregar nuevo usuario</h5>
                <div class="card-body">
                    <form action="{{route ('personas.store')}}"method=POST class="needs-validation" novalidate>
                        @csrf

                        <div class="form-group text-white">
                            <label for="nombres">Nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" required>
                            <div class="invalid-feedback">Por favor ingrese su nombre.</div>
                        </div>

                        <div class="form-group text-white">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                            <div class="invalid-feedback">Por favor ingrese sus apellidos.</div>
                        </div>

                        <div class="form-group text-white">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                            <div class="invalid-feedback">Por favor seleccione su fecha de nacimiento.</div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-white">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                            <div class="invalid-feedback">Por favor ingrese una contraseña.</div>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger mr-2">Agregar</button>
                            <a href="{{ route ("personas.index") }}" class="btn btn-danger mr-2">Regresar</a>
                            <a href="#" class="btn btn-outline-danger">Cancelar</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection