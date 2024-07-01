<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computadora;
class ComputadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Computadora::create([
            'nombre' => 'PC001',
            'estado' => 'activo',
            'memoria_ram' => '8 GB',
            'memoria_interna' => '512 GB SSD',
            'sede_id' => 1,
        ]);

        Computadora::create([
            'nombre' => 'PC002',
            'estado' => 'inactivo',
            'memoria_ram' => '16 GB',
            'memoria_interna' => '1 TB HDD',
            'sede_id' => 1,
        ]);

        Computadora::create([
            'nombre' => 'PC003',
            'estado' => 'activo',
            'memoria_ram' => '4 GB',
            'memoria_interna' => '256 GB SSD',
            'sede_id' => 3,
        ]);

        Computadora::create([
            'nombre' => 'PC004',
            'estado' => 'activo',
            'memoria_ram' => '12 GB',
            'memoria_interna' => '512 GB SSD',
            'sede_id' => 2,
        ]);

        Computadora::create([
            'nombre' => 'PC005',
            'estado' => 'inactivo',
            'memoria_ram' => '8 GB',
            'memoria_interna' => '1 TB HDD',
            'sede_id' => 3,
        ]);

    }
}
