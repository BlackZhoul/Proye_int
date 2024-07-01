<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserva;
class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reserva 1 - Tipo: sala (espacio_id del 1 al 7)
        Reserva::create([
            'fecha_inicio' => '2023-07-01 10:00:00',
            'fecha_fin' => '2023-07-01 12:00:00',
            'estado' => 'aprobada',
            'user_id' => 1,
            'espacio_id' => 1, // Sala 1
            'espacio_tipo' => 'sala',
        ]);

        // Reserva 2 - Tipo: computadora (espacio_id del 1 al 5)
        Reserva::create([
            'fecha_inicio' => '2023-07-02 14:00:00',
            'fecha_fin' => '2023-07-02 16:00:00',
            'estado' => 'pendiente',
            'user_id' => 2,
            'espacio_id' => 3, // Computadora 3
            'espacio_tipo' => 'computadora',
        ]);

        // Reserva 3 - Tipo: sala (espacio_id del 1 al 7)
        Reserva::create([
            'fecha_inicio' => '2023-07-03 09:00:00',
            'fecha_fin' => '2023-07-03 11:00:00',
            'estado' => 'cancelada',
            'user_id' => 3,
            'espacio_id' => 5, // Sala 5
            'espacio_tipo' => 'sala',
        ]);

        // Reserva 4 - Tipo: sala (espacio_id del 1 al 7)
        Reserva::create([
            'fecha_inicio' => '2023-07-04 08:00:00',
            'fecha_fin' => '2023-07-04 10:00:00',
            'estado' => 'aprobada',
            'user_id' => 1,
            'espacio_id' => 7, // Sala 7
            'espacio_tipo' => 'sala',
        ]);

        // Reserva 5 - Tipo: computadora (espacio_id del 1 al 5)
        Reserva::create([
            'fecha_inicio' => '2023-07-05 15:00:00',
            'fecha_fin' => '2023-07-05 17:00:00',
            'estado' => 'pendiente',
            'user_id' => 2,
            'espacio_id' => 1, // Computadora 1
            'espacio_tipo' => 'computadora',
        ]);

        // Reserva 6 - Tipo: sala (espacio_id del 1 al 7)
        Reserva::create([
            'fecha_inicio' => '2023-07-06 11:00:00',
            'fecha_fin' => '2023-07-06 13:00:00',
            'estado' => 'cancelada',
            'user_id' => 3,
            'espacio_id' => 3, // Sala 3
            'espacio_tipo' => 'sala',
        ]);




    }
}
