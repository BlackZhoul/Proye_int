<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;
class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Departamento::create([
            'nombre' => 'Tecnología Digital',
        ]);

        Departamento::create([
            'nombre' => 'Mecánica y Aviación',
        ]);

        Departamento::create([
            'nombre' => 'Minería, Procesos Químicos y Metalúrgicos',
        ]);

        Departamento::create([
            'nombre' => 'Mecatrónica',
        ]);

        Departamento::create([
            'nombre' => 'Electricidad y Electrónica',
        ]);

        Departamento::create([
            'nombre' => 'Gestión y Producción',
        ]);

        Departamento::create([
            'nombre' => 'Seguridad y Salud en el Trabajo',
        ]);

        Departamento::create([
            'nombre' => 'Tecnología Agrícola',
        ]);
    }
}
