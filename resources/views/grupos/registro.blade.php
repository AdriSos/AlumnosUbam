@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Configurar Nuevo Grupo</h2>
            <form action="{{ url('/guardar-grupo') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Carrera Universitaria</label>
                    <select name="carrera_id" id="carrera_id" class="form-select" onchange="verCodigo()" required>
                        <option value="">-- Seleccionar --</option>
                        @foreach($carreras as $c)
                            <option value="{{ $c->id }}" data-siglas="{{ $c->siglas }}">{{ $c->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label">Grado / Cuatrimestre</label>
                        <select name="grado_id" id="grado_id" class="form-select" onchange="verCodigo()" required>
                            <option value="">-- Seleccionar --</option>
                            @foreach($grados as $g)
                                <option value="{{ $g->id }}">{{ $g->numero }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-label">Turno</label>
                        <select name="turno_id" class="form-select" required>
                            @foreach($turnos as $t)
                                <option value="{{ $t->id }}">{{ $t->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="alert alert-info border-0 shadow-sm mb-4">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><strong>Código Sugerido:</strong></div>
                        <input type="text" id="preview_text" class="form-control-plaintext fs-4 fw-bold text-primary" readonly placeholder="---">
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100 btn-custom">Generar Grupo</button>
            </form>
        </div>
    </div>
</div>

<script>
function verCodigo() {
    const carrera = document.getElementById('carrera_id');
    const grado = document.getElementById('grado_id');
    const preview = document.getElementById('preview_text');

    const siglas = carrera.options[carrera.selectedIndex].getAttribute('data-siglas') || "";
    const numGrado = grado.options[grado.selectedIndex].text || "";

    if(siglas && numGrado !== "-- Seleccionar --") {
        preview.value = siglas + numGrado + "01";
    } else {
        preview.value = "";
    }
}
</script>
@endsection
