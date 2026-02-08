<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    public function run(): void
    {
        $carreras = [
            ['nombre' => 'Ingeniería en Sistemas Computacionales', 'siglas' => 'ISC'],
            ['nombre' => 'Licenciatura en Derecho', 'siglas' => 'LIDER'],
            ['nombre' => 'Licenciatura en Administración de Empresas', 'siglas' => 'LEA'],
            ['nombre' => 'Licenciatura en Contaduría Pública y Finanzas', 'siglas' => 'LCPYF'],
            ['nombre' => 'Licenciatura en Psicología', 'siglas' => 'LPSIC'],
            ['nombre' => 'Licenciatura en Pedagogía', 'siglas' => 'LIPED'],
            ['nombre' => 'Ingeniería en Arquitectura', 'siglas' => 'IAR'],
            ['nombre' => 'Licenciatura en Diseño Gráfico', 'siglas' => 'LDG'],
            ['nombre' => 'Licenciatura en Mercadotecnia y Publicidad', 'siglas' => 'LMP'],
            ['nombre' => 'Licenciatura en Administración de Empresas Turísticas', 'siglas' => 'LAET'],
            ['nombre' => 'Licenciatura en Relaciones Internacionales', 'siglas' => 'LRI'],
            ['nombre' => 'Licenciatura en Periodismo y Ciencias de la Comunicación', 'siglas' => 'LPCC'],
            ['nombre' => 'Licenciatura en Gastronomía', 'siglas' => 'LGAS'],
            ['nombre' => 'Licenciatura en Diseño de Modas', 'siglas' => 'LDM'],
            ['nombre' => 'Licenciatura en Cultura Física y Educación del Deporte', 'siglas' => 'LCFYED'],
            ['nombre' => 'Licenciatura en Idiomas', 'siglas' => 'LIDIO'],
            ['nombre' => 'Licenciatura en Diseño de Interiores', 'siglas' => 'LDI'],
            ['nombre' => 'Ingeniería en Logística y Transporte', 'siglas' => 'ILT'],
            ['nombre' => 'Licenciatura en Informática Administrativa y Fiscal', 'siglas' => 'LIAF'],
            ['nombre' => 'Ingeniería Mecánica Automotriz', 'siglas' => 'IMA']
        ];

        foreach ($carreras as $c) {
            DB::table('carreras')->insert([
                'nombre' => $c['nombre'],
                'siglas' => $c['siglas'],
                'activo' => true
            ]);
        }
    }
}
