<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departamento;
use App\Models\Ejemplar;
use App\Models\ModeloCalculadora;
use App\Models\Prestamo;
use App\Models\Reserva;
use App\Models\Tablet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            PenalizacionSeeder::class,
            ComentarioSeeder::class,
            SedeSeeder::class,
            SalaSeeder::class,
            ComputadoraSeeder::class,
            ReservaSeeder::class,
            DepartamentoSeeder::class,
            TemaSeeder::class,
            AutorSeeder::class,
            EditorialSeeder::class,
            LibroSeeder::class,
            EbookSeeder::class,
            EjemplarSeeder::class,
            ModeloTabletSeeder::class,
            ModeloCalculadoraSeeder::class,
            CalculadoraSeeder::class,
            TabletSeeder::class,
            PrestamoSeeder::class
        ]);
    }
}
