<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Juan',
            'ape_paterno' => 'Pérez',
            'ape_materno' => 'Gómez',
            'telefono' => 987654321,
            'direccion' => 'Av. Primavera 123',
            'fecha_nacimiento' => '1995-08-15',
            'email' => 'juan.perez@tecsup.edu.pe',
            'password' => bcrypt('password'),
            'estado' => 'activo',
            'rol' => 'alumno',
            'codigo' => 10001,
            'remember_token' => 'eB5GtY3zR7',
        ]);

        User::create([
            'nombre' => 'María',
            'ape_paterno' => 'López',
            'ape_materno' => 'García',
            'telefono' => 987123456,
            'direccion' => 'Calle Los Pinos 456',
            'fecha_nacimiento' => '1990-03-25',
            'email' => 'maria.lopez@tecsup.edu.pe',
            'password' => bcrypt('password'),
            'estado' => 'activo',
            'rol' => 'alumno',
            'codigo' => 10002,
            'remember_token' => 'aN2dVf7sM1',
        ]);

        User::create([
            'nombre' => 'Carlos',
            'ape_paterno' => 'Gómez',
            'ape_materno' => 'Martínez',
            'telefono' => 987789456,
            'direccion' => 'Jr. Huascarán 789',
            'fecha_nacimiento' => '1988-11-10',
            'email' => 'carlos.gomez@tecsup.edu.pe',
            'password' => bcrypt('password'),
            'estado' => 'activo',
            'rol' => 'profesor',
            'codigo' => null,
            'remember_token' => 'rT6jFk4lP9',
        ]);

        User::create([
            'nombre' => 'Ana',
            'ape_paterno' => 'Rodríguez',
            'ape_materno' => 'Sánchez',
            'telefono' => 987654987,
            'direccion' => 'Av. Los Sauces 567',
            'fecha_nacimiento' => '1985-09-20',
            'email' => 'ana.rodriguez@tecsup.edu.pe',
            'password' => bcrypt('password'),
            'estado' => 'activo',
            'rol' => 'bibliotecario',
            'codigo' => null,
            'remember_token' => 'mC3vBh8nK2',
        ]);

        User::create([
            'nombre' => 'Pedro',
            'ape_paterno' => 'Fernández',
            'ape_materno' => 'Lima',
            'telefono' => 987987654,
            'direccion' => 'Calle Las Orquídeas 890',
            'fecha_nacimiento' => '1987-04-12',
            'email' => 'pedro.fernandez@tecsup.edu.pe',
            'password' => bcrypt('password'),
            'estado' => 'activo',
            'rol' => 'bibliotecario',
            'codigo' => null,
            'remember_token' => 'pA9sWx1qZ0',
        ]);


    }
}
