<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentario;
class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Comentario::create([
            'tipo' => 'comentario',
            'mensaje' => 'Me gusta mucho el nuevo diseño del sitio web.',
            'user_id' => 1,
        ]);

        Comentario::create([
            'tipo' => 'consulta',
            'mensaje' => '¿Cuál es el horario de atención al cliente?',
            'user_id' => 2,
        ]);

        Comentario::create([
            'tipo' => 'reclamo',
            'mensaje' => 'He recibido un producto defectuoso. Necesito una solución urgente.',
            'user_id' => 3,
        ]);

        Comentario::create([
            'tipo' => 'sugerencia',
            'mensaje' => 'Deberían mejorar la velocidad de carga del sitio.',
            'user_id' => 1,
        ]);
    }
}
