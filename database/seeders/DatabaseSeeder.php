<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Limpiar datos previos para evitar errores de duplicidad
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('carreras')->truncate();
        DB::table('turnos')->truncate();
        DB::table('grados')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 2. Insertar Carreras
        DB::table('carreras')->insert([
            ['nombre' => 'Ingeniería en Sistemas Computacionales', 'siglas' => 'ISC', 'activo' => true],
            ['nombre' => 'Licenciatura en Derecho', 'siglas' => 'LIDER', 'activo' => true],
            ['nombre' => 'Licenciatura en Administración de Empresas', 'siglas' => 'LEA', 'activo' => true],
            ['nombre' => 'Licenciatura en Contaduría Pública y Finanzas', 'siglas' => 'LCPYF', 'activo' => true],
            ['nombre' => 'Licenciatura en Psicología', 'siglas' => 'LPSIC', 'activo' => true],
            ['nombre' => 'Licenciatura en Pedagogía', 'siglas' => 'LIPED', 'activo' => true],
            ['nombre' => 'Ingeniería en Arquitectura', 'siglas' => 'IAR', 'activo' => true],
            ['nombre' => 'Licenciatura en Diseño Gráfico', 'siglas' => 'LDG', 'activo' => true],
            ['nombre' => 'Licenciatura en Mercadotecnia y Publicidad', 'siglas' => 'LMP', 'activo' => true],
            ['nombre' => 'Licenciatura en Administración de Empresas Turísticas', 'siglas' => 'LAET', 'activo' => true],
            ['nombre' => 'Licenciatura en Relaciones Internacionales', 'siglas' => 'LRI', 'activo' => true],
            ['nombre' => 'Licenciatura en Periodismo y Ciencias de la Comunicación', 'siglas' => 'LPCC', 'activo' => true],
            ['nombre' => 'Licenciatura en Gastronomía', 'siglas' => 'LGAS', 'activo' => true],
            ['nombre' => 'Licenciatura en Diseño de Modas', 'siglas' => 'LDM', 'activo' => true],
            ['nombre' => 'Licenciatura en Cultura Física y Educación del Deporte', 'siglas' => 'LCFYED', 'activo' => true],
            ['nombre' => 'Licenciatura en Idiomas', 'siglas' => 'LIDIO', 'activo' => true],
            ['nombre' => 'Licenciatura en Diseño de Interiores', 'siglas' => 'LDI', 'activo' => true],
            ['nombre' => 'Ingeniería en Logística y Transporte', 'siglas' => 'ILT', 'activo' => true],
            ['nombre' => 'Licenciatura en Informática Administrativa y Fiscal', 'siglas' => 'LIAF', 'activo' => true],
            ['nombre' => 'Ingeniería Mecánica Automotriz', 'siglas' => 'IMA', 'activo' => true]
        ]);

        // 3. Insertar Turnos
        DB::table('turnos')->insert([
            ['nombre' => 'Matutino', 'activo' => true],
            ['nombre' => 'Vespertino', 'activo' => true],
            ['nombre' => 'Mixto', 'activo' => true],
        ]);

        // 4. Insertar Grados
        DB::table('grados')->insert([
            ['numero' => '1', 'activo' => true],
            ['numero' => '2', 'activo' => true],
            ['numero' => '3', 'activo' => true],
            ['numero' => '4', 'activo' => true],
            ['numero' => '5', 'activo' => true],
            ['numero' => '6', 'activo' => true],
            ['numero' => '7', 'activo' => true],
            ['numero' => '8', 'activo' => true],
            ['numero' => '9', 'activo' => true],
            ['numero' => '10', 'activo' => true],
            ['numero' => '11', 'activo' => true],
        ]);
    }
}
