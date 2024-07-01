<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                // Prestamo 1 (Libro)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(5),
                    'fecha_devolucion_prevista' => now()->addDays(10),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'presencial',
                    'user_id' => 1,
                    'material_id' => 1,
                    'material_tipo' => 'libro',
                ]);
        
                // Prestamo 2 (Tablet)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(3),
                    'fecha_devolucion_prevista' => now()->addDays(7),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'virtual',
                    'user_id' => 2,
                    'material_id' => 1,
                    'material_tipo' => 'tablet',
                ]);
        
                // Prestamo 3 (Calculadora)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(2),
                    'fecha_devolucion_prevista' => now()->addDays(5),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'presencial',
                    'user_id' => 3,
                    'material_id' => 1,
                    'material_tipo' => 'calculadora',
                ]);
        
                // Prestamo 4 (Libro)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(7),
                    'fecha_devolucion_prevista' => now()->addDays(12),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'presencial',
                    'user_id' => 1,
                    'material_id' => 2,
                    'material_tipo' => 'libro',
                ]);
        
                // Prestamo 5 (Tablet)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(4),
                    'fecha_devolucion_prevista' => now()->addDays(8),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'virtual',
                    'user_id' => 2,
                    'material_id' => 2,
                    'material_tipo' => 'tablet',
                ]);
        
                // Prestamo 6 (Calculadora)
                Prestamo::create([
                    'fecha_prestamo' => now()->subDays(1),
                    'fecha_devolucion_prevista' => now()->addDays(6),
                    'fecha_devolucion_real' => null,
                    'estado' => 'activo',
                    'modalidad' => 'presencial',
                    'user_id' => 3,
                    'material_id' => 2,
                    'material_tipo' => 'calculadora',
                ]);
    }
}
