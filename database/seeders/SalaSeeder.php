<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sala;
class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sede 1
        Sala::create([
            'nombre' => 'Sala 1',
            'estado' => 'activo',
            'capacidad' => 7,
            'sede_id' => 1,
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'estado' => 'activo',
            'capacidad' => 7,
            'sede_id' => 1,
        ]);

        Sala::create([
            'nombre' => 'Sala 3',
            'estado' => 'inactivo',
            'capacidad' => 3,
            'sede_id' => 1,
        ]);

        
        Sala::create([
            'nombre' => 'Sala 1',
            'estado' => 'activo',
            'capacidad' => 9,
            'sede_id' => 2,
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'estado' => 'inactivo',
            'capacidad' => 9,
            'sede_id' => 2,
        ]);
        Sala::create([
            'nombre' => 'Sala 1',
            'estado' => 'activo',
            'capacidad' => 9,
            'sede_id' => 3,
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'estado' => 'inactivo',
            'capacidad' => 9,
            'sede_id' => 3,
        ]);
    }
}
