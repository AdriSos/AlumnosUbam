@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card p-4 mb-4">
            <h3 class="mb-3">Catálogo de Carreras</h3>
            <table class="table border">
                <thead class="table-light">
                    <tr><th>Carrera</th><th>Siglas</th><th>Estatus</th><th class="text-end">Acciones</th></tr>
                </thead>
                <tbody>
                    @foreach($carreras as $c)
                    <tr>
                        <td>{{ $c->nombre }}</td>
                        <td><span class="badge bg-secondary">{{ $c->siglas }}</span></td>
                        <td>
                            <span class="badge {{ $c->activo ? 'bg-success' : 'bg-danger' }}">
                                {{ $c->activo ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="{{ url('/cambiar-estatus/carreras/'.$c->id.'/0') }}" class="btn btn-sm btn-danger">Inhabilitar</a>
                            <a href="{{ url('/cambiar-estatus/carreras/'.$c->id.'/1') }}" class="btn btn-sm btn-success">Activar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <h3 class="mb-3 text-secondary">Turnos</h3>
            <ul class="list-group list-group-flush">
                @foreach($turnos as $t)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $t->nombre }}
                    <span class="badge {{ $t->activo ? 'bg-primary' : 'bg-secondary' }} rounded-pill">
                        {{ $t->activo ? 'On' : 'Off' }}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
