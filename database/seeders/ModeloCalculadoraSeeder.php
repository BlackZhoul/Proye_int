<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModeloCalculadora;
class ModeloCalculadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModeloCalculadora::create([
            'marca' => 'HP',
            'nombre' => 'HP 12C',
            'tipo' => 'Financiera',
        ]);
        ModeloCalculadora::create([
            'marca' => 'Casio',
            'nombre' => 'FX-991ES PLUS',
            'tipo' => 'Científica',
        ]);
        ModeloCalculadora::create([
            'marca' => 'Casio',
            'nombre' => 'FX-82MS',
            'tipo' => 'Científica',
        ]);
    }
}
