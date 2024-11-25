@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registro de Usuario</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Campo de Nombre -->
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Campo de Correo Electrónico -->
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Campo de Contraseña -->
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirmación de Contraseña -->
        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
