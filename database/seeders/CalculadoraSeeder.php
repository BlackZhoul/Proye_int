<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calculadora;
class CalculadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Calculadora::create([
            'codigo' => 'CALC-001',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-01-15',
            'modelo_id' => 1,
            'sede_id' => 3,
        ]);

        Calculadora::create([
            'codigo' => 'CALC-002',
            'estado' => 'inactivo',
            'fecha_adquisicion' => '2022-12-05',
            'modelo_id' => 1,
            'sede_id' => 2,
        ]);

        Calculadora::create([
            'codigo' => 'CALC-003',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-03-20',
            'modelo_id' => 2,
            'sede_id' => 2,
        ]);

        Calculadora::create([
            'codigo' => 'CALC-004',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-02-10',
            'modelo_id' => 2,
            'sede_id' => 1,
        ]);

        Calculadora::create([
            'codigo' => 'CALC-005',
            'estado' => 'inactivo',
            'fecha_adquisicion' => '2023-04-30',
            'modelo_id' => 3,
            'sede_id' => 1,
        ]);

    }
}
