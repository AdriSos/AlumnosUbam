<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnoSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('turnos')->insert([
            ['nombre' => 'Matutino', 'activo' => true],
            ['nombre' => 'Vespertino', 'activo' => true],
            ['nombre' => 'Mixto', 'activo' => true],
        ]);
    }
}
