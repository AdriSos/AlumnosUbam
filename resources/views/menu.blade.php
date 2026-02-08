@extends('layouts.app')
@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold mb-4">Panel de Control</h1>
    <div class="row g-4 justify-content-center">
        <div class="col-md-3">
            <a href="{{ url('/registro-alumnos') }}" class="text-decoration-none">
                <div class="card p-4 bg-white text-primary h-100">
                    <h3 class="h5">Alumnos</h3>
                    <p class="text-muted small">Registrar nuevos estudiantes</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/registro-grupos') }}" class="text-decoration-none">
                <div class="card p-4 bg-white text-primary h-100">
                    <h3 class="h5">Grupos</h3>
                    <p class="text-muted small">Códigos automáticos (ISC...)</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/alumnos-registrados') }}" class="text-decoration-none">
                <div class="card p-4 bg-white text-primary h-100">
                    <h3 class="h5">Lista</h3>
                    <p class="text-muted small">Gestión y Aceptación</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/configuracion') }}" class="text-decoration-none">
                <div class="card p-4 bg-white text-primary h-100">
                    <h3 class="h5">Catálogos</h3>
                    <p class="text-muted small">Habilitar/Inhabilitar</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
