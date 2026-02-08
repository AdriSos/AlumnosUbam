<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Catálogo de Carreras
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('siglas', 10);
            $table->boolean('activo')->default(true);
        });

        // 2. Catálogo de Turnos
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('activo')->default(true);
        });

        // 3. Catálogo de Grados
        Schema::create('grados', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->boolean('activo')->default(true);
        });

        // 4. Registro de Grupos (Genera la lógica ISC301)
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id')->constrained('carreras');
            $table->foreignId('turno_id')->constrained('turnos');
            $table->foreignId('grado_id')->constrained('grados');
            $table->string('codigo_grupo');
            $table->timestamps();
        });

        // 5. Registro de Alumnos
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->foreignId('grupo_id')->constrained('grupos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('grupos');
        Schema::dropIfExists('grados');
        Schema::dropIfExists('turnos');
        Schema::dropIfExists('carreras');
    }
};
