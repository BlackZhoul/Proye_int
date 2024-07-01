<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tablet;
class TabletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tablet 1
        Tablet::create([
            'codigo' => 'TAB001',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-01-15',
            'modelo_id' => 1,
            'sede_id' => 1,
        ]);

        // Tablet 2
        Tablet::create([
            'codigo' => 'TAB002',
            'estado' => 'inactivo',
            'fecha_adquisicion' => '2023-02-20',
            'modelo_id' => 2,
            'sede_id' => 1,
        ]);

        // Tablet 3
        Tablet::create([
            'codigo' => 'TAB003',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-03-10',
            'modelo_id' => 3,
            'sede_id' => 3,
        ]);

        // Tablet 4
        Tablet::create([
            'codigo' => 'TAB004',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-04-05',
            'modelo_id' => 1,
            'sede_id' => 3,
        ]);

        // Tablet 5
        Tablet::create([
            'codigo' => 'TAB005',
            'estado' => 'inactivo',
            'fecha_adquisicion' => '2023-05-12',
            'modelo_id' => 2,
            'sede_id' => 2,
        ]);

        // Tablet 6
        Tablet::create([
            'codigo' => 'TAB006',
            'estado' => 'activo',
            'fecha_adquisicion' => '2023-06-20',
            'modelo_id' => 3,
            'sede_id' => 2,
        ]);
    }
}
