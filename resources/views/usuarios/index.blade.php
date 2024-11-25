@extends('dashboard.app')
@section('content')
{{-- resources/views/usuarios/index.blade.php --}}
@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Agregar Usuario</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Carnet</th>
                <th>Estado</th>
                <th>Expedido</th>
                <th>Fecha de Nacimiento</th>
                <th>Teléfono</th>
                <th>Rol</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido_p }}</td>
                    <td>{{ $usuario->apellido_m }}</td>
                    <td>{{ $usuario->carnet }}</td>
                    <td>{{ $usuario->estado == '1' ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $usuario->expedido }}</td>
                    <td>{{ $usuario->fecha_nac }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->nombre_rol }}</td>
                    <td>{{ $usuario->nombre_area }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@endsection
