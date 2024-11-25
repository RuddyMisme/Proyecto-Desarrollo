{{-- resources/views/usuarios/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Detalles del Usuario</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Apellido Paterno</th>
            <td>{{ $usuario->apellido_p }}</td>
        </tr>
        <tr>
            <th>Apellido Materno</th>
            <td>{{ $usuario->apellido_m }}</td>
        </tr>
        <tr>
            <th>Carnet</th>
            <td>{{ $usuario->carnet }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ $usuario->estado == '1' ? 'Activo' : 'Inactivo' }}</td>
        </tr>
        <tr>
            <th>Expedido</th>
            <td>{{ $usuario->expedido }}</td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td>{{ $usuario->fecha_nac }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $usuario->telefono }}</td>
        </tr>
        <tr>
            <th>Rol</th>
            <td>{{ $usuario->nombre_rol }}</td>
        </tr>
        <tr>
            <th>Área</th>
            <td>{{ $usuario->nombre_area }}</td>
        </tr>
    </table>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
@endsection
