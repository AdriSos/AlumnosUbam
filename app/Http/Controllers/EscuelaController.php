<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EscuelaController extends Controller
{
    // Función para el Menú Principal
    public function mostrarMenu() {
        return view('menu');
    }

    public function registroAlumnos() {
        $grupos = DB::table('grupos')->get();
        return view('alumnos.registro', compact('grupos'));
    }

    public function guardarAlumno(Request $request) {
        DB::table('alumnos')->insert([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'grupo_id' => $request->grupo_id,
            'created_at' => now(),
        ]);
        return redirect('/alumnos-registrados');
    }

    public function registroGrupos() {
        $carreras = DB::table('carreras')->where('activo', true)->get();
        $turnos = DB::table('turnos')->where('activo', true)->get();
        $grados = DB::table('grados')->where('activo', true)->get();
        return view('grupos.registro', compact('carreras', 'turnos', 'grados'));
    }

    public function guardarGrupo(Request $request) {
        $carrera = DB::table('carreras')->where('id', $request->carrera_id)->first();
        $grado = DB::table('grados')->where('id', $request->grado_id)->first();

        $conteo = DB::table('grupos')
            ->where('carrera_id', $request->carrera_id)
            ->where('grado_id', $request->grado_id)
            ->count() + 1;

        $codigo = $carrera->siglas . $grado->numero . str_pad($conteo, 2, '0', STR_PAD_LEFT);

        DB::table('grupos')->insert([
            'carrera_id' => $request->carrera_id,
            'turno_id' => $request->turno_id,
            'grado_id' => $request->grado_id,
            'codigo_grupo' => $codigo,
            'created_at' => now(),
        ]);

        return redirect('/registro-grupos');
    }

    public function listaAlumnos() {
        $alumnos = DB::table('alumnos')
            ->join('grupos', 'alumnos.grupo_id', '=', 'grupos.id')
            ->select('alumnos.*', 'grupos.codigo_grupo')
            ->get();
        return view('alumnos.lista', compact('alumnos'));
    }

    public function configuracion() {
        $carreras = DB::table('carreras')->get();
        $turnos = DB::table('turnos')->get();
        $grados = DB::table('grados')->get();
        return view('catalogos', compact('carreras', 'turnos', 'grados'));
    }

    public function cambiarEstatus($tabla, $id, $estado) {
        DB::table($tabla)->where('id', $id)->update(['activo' => $estado]);
        return back();
    }
}
