<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penalizacion;
class PenalizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penalizacion::create([
            'tipo' => 'Suspensión temporal',
            'observacion' => 'Falta grave cometida en el campus',
            'fecha_inicio' => '2024-06-01',
            'fecha_fin' => '2024-06-15',
            'user_id' => 1,
            'estado' => 'activa', // La penalización está actualmente en curso
        ]);

        Penalizacion::create([
            'tipo' => 'Amonestación escrita',
            'observacion' => 'Incumplimiento de normativa interna',
            'fecha_inicio' => '2024-05-20',
            'fecha_fin' => '2024-05-20',
            'user_id' => 2,
            'estado' => 'inactiva', // La penalización ya ha sido cumplida
        ]);

        Penalizacion::create([
            'tipo' => 'Multas',
            'observacion' => 'Incumplimiento de horarios',
            'fecha_inicio' => '2024-07-01',
            'fecha_fin' => '2024-07-01',
            'user_id' => 3,
            'estado' => 'cancelada', // La penalización ha sido cancelada
        ]);

    }
}
