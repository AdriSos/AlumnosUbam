<?php
use App\Http\Controllers\EscuelaController;
use Illuminate\Support\Facades\Route;

// Cualquier entrada a la página principal CARGA EL MENÚ
Route::get('/', function () {
    return view('menu');
});

// Rutas directas
Route::get('/registro-alumnos', [EscuelaController::class, 'registroAlumnos']);
Route::get('/registro-grupos', [EscuelaController::class, 'registroGrupos']);
Route::get('/alumnos-registrados', [EscuelaController::class, 'listaAlumnos']);
Route::get('/configuracion', [EscuelaController::class, 'configuracion']);

// Acciones
Route::post('/guardar-alumno', [EscuelaController::class, 'guardarAlumno']);
Route::post('/guardar-grupo', [EscuelaController::class, 'guardarGrupo']);
Route::get('/cambiar-estatus/{tabla}/{id}/{estado}', [EscuelaController::class, 'cambiarEstatus']);
