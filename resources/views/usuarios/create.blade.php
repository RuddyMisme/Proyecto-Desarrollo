{{-- resources/views/usuarios/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido_p">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_p" required>
        </div>
        <div class="form-group">
            <label for="apellido_m">Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_m" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" name="estado">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="carnet">Carnet</label>
            <input type="text" class="form-control" name="carnet" required>
        </div>
        <div class="form-group">
            <label for="expedido">Expedido</label>
            <select class="form-control" name="expedido">
                <option value="BN">BN</option>
                <option value="CH">CH</option>
                <option value="CB">CB</option>
                <option value="LP">LP</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="PT">PT</option>
                <option value="SC">SC</option>
                <option value="TJ">TJ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label for="nombre_rol">Rol</label>
            <select class="form-control" name="nombre_rol">
                <option value="Usuario">Usuario</option>
                <option value="Expositor">Expositor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nombre_area">Área</label>
            <select class="form-control" name="nombre_area">
                <option value="Docente">Docente</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Externo">Externo</option>
                <option value="Estudiante">Estudiante</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
