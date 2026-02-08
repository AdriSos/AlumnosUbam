@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
    <h2 class="mb-4">Control de Asistencia</h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Alumno</th>
                    <th class="text-center">Grupo Asignado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr id="fila-{{ $alumno->id }}" class="transition-all">
                    <td>{{ $alumno->nombre }} {{ $alumno->apellido_p }} {{ $alumno->apellido_m }}</td>
                    <td class="text-center fw-bold text-primary">{{ $alumno->codigo_grupo }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-success me-2" onclick="cambiarColor({{ $alumno->id }}, '#d1e7dd')">Aceptar</button>
                        <button class="btn btn-sm btn-outline-danger" onclick="cambiarColor({{ $alumno->id }}, '#f8d7da')">Rechazar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
function cambiarColor(id, color) {
    document.getElementById('fila-' + id).style.backgroundColor = color;
}
</script>
@endsection
