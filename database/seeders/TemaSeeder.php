<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;
class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tema::create([
            'nombre' => 'Literatura Comparada',
        ]);

        Tema::create([
            'nombre' => 'Historia del Arte',
        ]);

        Tema::create([
            'nombre' => 'Filosofía Contemporánea',
        ]);

        Tema::create([
            'nombre' => 'Ciencias Políticas',
        ]);

        Tema::create([
            'nombre' => 'Economía Internacional',
        ]);

        Tema::create([
            'nombre' => 'Sociología Urbana',
        ]);

        Tema::create([
            'nombre' => 'Psicología Organizacional',
        ]);

        Tema::create([
            'nombre' => 'Educación Inclusiva',
        ]);

        Tema::create([
            'nombre' => 'Tecnología Educativa',
        ]);

        Tema::create([
            'nombre' => 'Desarrollo Sostenible',
        ]);

        Tema::create([
            'nombre' => 'Medicina Preventiva',
        ]);

        Tema::create([
            'nombre' => 'Autoayuda y Crecimiento Personal',
        ]);

        Tema::create([
            'nombre' => 'Negocios y Emprendimiento',
        ]);
    }
}
