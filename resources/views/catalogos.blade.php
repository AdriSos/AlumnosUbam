@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h2 class="mb-4 text-primary">Configuración de Catálogos</h2>

    <h3 class="h5 mb-3 text-secondary">Carreras Registradas</h3>
    <div class="table-responsive">
        <table class="table table-hover align-middle border">
            <thead class="table-dark">
                <tr>
                    <th>Nombre de la Carrera</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carreras as $c)
                <tr>
                    <td>{{ $c->nombre }}</td>
                    <td class="text-center">
                        <span class="badge {{ $c->activo ? 'bg-success' : 'bg-danger' }}">
                            {{ $c->activo ? 'Activo' : 'Inactivo' }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ url('/cambiar-estatus/carreras/'.$c->id.'/0') }}" class="btn btn-sm btn-outline-danger">Inhabilitar</a>
                        <a href="{{ url('/cambiar-estatus/carreras/'.$c->id.'/1') }}" class="btn btn-sm btn-outline-success">Activar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
