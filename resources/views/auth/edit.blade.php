@extends('dashboard.app')

@section('content')
<div class="container">
    <h2>Cambiar Contraseña</h2>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <!-- Campo de Contraseña Actual -->
        <div class="form-group">
            <label for="current_password">Contraseña Actual</label>
            <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>
            @error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Campo de Nueva Contraseña -->
        <div class="form-group">
            <label for="password">Nueva Contraseña</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirmación de Nueva Contraseña -->
        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
    </form>

    @if(session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
