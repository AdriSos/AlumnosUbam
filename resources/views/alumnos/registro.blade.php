@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="text-center mb-4">Inscripción de Alumno</h2>
            <form action="{{ url('/guardar-alumno') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre(s)</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ej: Juan" required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Apellido Paterno</label>
                        <input type="text" name="apellido_p" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Apellido Materno</label>
                        <input type="text" name="apellido_m" class="form-control" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Seleccionar Grupo disponible</label>
                    <select name="grupo_id" class="form-select" required>
                        <option value="">-- Elige un grupo --</option>
                        @foreach($grupos as $grupo)
                            <option value="{{ $grupo->id }}">{{ $grupo->codigo_grupo }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-custom">Finalizar Registro</button>
            </form>
        </div>
    </div>
</div>
@endsection
