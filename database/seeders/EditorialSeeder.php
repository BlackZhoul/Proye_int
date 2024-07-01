<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;
class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Editorial::create([
            'nombre' => 'Editorial A',
            'direccion' => 'Calle Principal 123',
            'correo' => 'info@editoriala.com',
        ]);

        Editorial::create([
            'nombre' => 'Editorial B',
            'direccion' => 'Avenida Central 456',
            'correo' => 'contacto@editorialb.com',
        ]);

        Editorial::create([
            'nombre' => 'Editorial C',
            'direccion' => 'Plaza Mayor 789',
            'correo' => 'ventas@editorialc.com',
        ]);
    }
}
