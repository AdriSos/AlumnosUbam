<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 11; $i++) {
            \DB::table('grados')->insert([
                'numero' => $i,
                'activo' => true
            ]);
        }
    }
}
