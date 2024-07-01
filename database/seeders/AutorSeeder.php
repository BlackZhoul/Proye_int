<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;
class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Autor::create([
            'nombre' => 'Juan',
            'ape_paterno' => 'García',
            'ape_materno' => 'López',
            'pais' => 'México',
            'fecha_nacimiento' => '1980-03-15',
        ]);

        Autor::create([
            'nombre' => 'María',
            'ape_paterno' => 'Martínez',
            'ape_materno' => 'Sánchez',
            'pais' => 'España',
            'fecha_nacimiento' => '1975-07-20',
        ]);

        Autor::create([
            'nombre' => 'Carlos',
            'ape_paterno' => 'Rodríguez',
            'ape_materno' => 'Gómez',
            'pais' => 'Argentina',
            'fecha_nacimiento' => '1990-01-10',
        ]);

        Autor::create([
            'nombre' => 'Laura',
            'ape_paterno' => 'Pérez',
            'ape_materno' => 'Hernández',
            'pais' => 'Colombia',
            'fecha_nacimiento' => '1988-05-25',
        ]);

        Autor::create([
            'nombre' => 'José',
            'ape_paterno' => 'López',
            'ape_materno' => 'Díaz',
            'pais' => 'Chile',
            'fecha_nacimiento' => '1982-12-03',
        ]);

        Autor::create([
            'nombre' => 'Ana',
            'ape_paterno' => 'Fernández',
            'ape_materno' => 'Ramírez',
            'pais' => 'Perú',
            'fecha_nacimiento' => '1970-09-18',
        ]);

        Autor::create([
            'nombre' => 'Pedro',
            'ape_paterno' => 'González',
            'ape_materno' => 'Vargas',
            'pais' => 'Ecuador',
            'fecha_nacimiento' => '1985-11-07',
        ]);

        Autor::create([
            'nombre' => 'Sofía',
            'ape_paterno' => 'Torres',
            'ape_materno' => 'Moreno',
            'pais' => 'Uruguay',
            'fecha_nacimiento' => '1987-04-30',
        ]);

        Autor::create([
            'nombre' => 'Miguel',
            'ape_paterno' => 'Ruiz',
            'ape_materno' => 'Alvarez',
            'pais' => 'Venezuela',
            'fecha_nacimiento' => '1995-06-12',
        ]);

        Autor::create([
            'nombre' => 'Elena',
            'ape_paterno' => 'Sanchez',
            'ape_materno' => 'Jimenez',
            'pais' => 'Bolivia',
            'fecha_nacimiento' => '1983-08-22',
        ]);
    }
}
