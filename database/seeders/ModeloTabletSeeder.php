<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModeloTablet;
class ModeloTabletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModeloTablet::create([
            'marca' => 'Samsung',
            'nombre' => 'Galaxy Tab S7',
            'memoria_ram' => '8 GB',
            'memoria_interna' => '128 GB',
        ]);

        ModeloTablet::create([
            'marca' => 'Apple',
            'nombre' => 'iPad Pro',
            'memoria_ram' => '6 GB',
            'memoria_interna' => '256 GB',
        ]);

        ModeloTablet::create([
            'marca' => 'Microsoft',
            'nombre' => 'Surface Pro 7',
            'memoria_ram' => '16 GB',
            'memoria_interna' => '512 GB',
        ]);
    }
}
