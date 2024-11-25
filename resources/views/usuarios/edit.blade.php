{{-- resources/views/usuarios/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido_p">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_p" value="{{ $usuario->apellido_p }}" required>
        </div>
        <div class="form-group">
            <label for="apellido_m">Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_m" value="{{ $usuario->apellido_m }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" name="estado">
                <option value="1" {{ $usuario->estado == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $usuario->estado == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="carnet">Carnet</label>
            <input type="text" class="form-control" name="carnet" value="{{ $usuario->carnet }}" required>
        </div>
        <div class="form-group">
            <label for="expedido">Expedido</label>
            <select class="form-control" name="expedido">
                <option value="BN" {{ $usuario->expedido == 'BN' ? 'selected' : '' }}>BN</option>
                <option value="CH" {{ $usuario->expedido == 'CH' ? 'selected' : '' }}>CH</option>
                <option value="CB" {{ $usuario->expedido == 'CB' ? 'selected' : '' }}>CB</option>
                <option value="LP" {{ $usuario->expedido == 'LP' ? 'selected' : '' }}>LP</option>
                <option value="OR" {{ $usuario->expedido == 'OR' ? 'selected' : '' }}>OR</option>
                <option value="PA" {{ $usuario->expedido == 'PA' ? 'selected' : '' }}>PA</option>
                <option value="PT" {{ $usuario->expedido == 'PT' ? 'selected' : '' }}>PT</option>
                <option value="SC" {{ $usuario->expedido == 'SC' ? 'selected' : '' }}>SC</option>
                <option value="TJ" {{ $usuario->expedido == 'TJ' ? 'selected' : '' }}>TJ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac" value="{{ $usuario->fecha_nac }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="{{ $usuario->telefono }}">
        </div>
        <div class="form-group">
            <label for="nombre_rol">Rol</label>
            <select class="form-control" name="nombre_rol">
                <option value="Usuario" {{ $usuario->nombre_rol == 'Usuario' ? 'selected' : '' }}>Usuario</option>
                <option value="Expositor" {{ $usuario->nombre_rol == 'Expositor' ? 'selected' : '' }}>Expositor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nombre_area">Área</label>
            <select class="form-control" name="nombre_area">
                <option value="Docente" {{ $usuario->nombre_area == 'Docente' ? 'selected' : '' }}>Docente</option>
                <option value="Administrativo" {{ $usuario->nombre_area == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                <option value="Externo" {{ $usuario->nombre_area == 'Externo' ? 'selected' : '' }}>Externo</option>
                <option value="Estudiante" {{ $usuario->nombre_area == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection
