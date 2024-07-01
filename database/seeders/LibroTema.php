<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroTema extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Relaciones entre libros y temas
                DB::table('libro_tema')->insert([
                    ['libro_id' => 1, 'tema_id' => 1],
                    ['libro_id' => 1, 'tema_id' => 2],
                    ['libro_id' => 2, 'tema_id' => 2],
                    ['libro_id' => 2, 'tema_id' => 3],
                    ['libro_id' => 3, 'tema_id' => 4],
                    ['libro_id' => 3, 'tema_id' => 5],
                    ['libro_id' => 4, 'tema_id' => 5],
                    ['libro_id' => 4, 'tema_id' => 6],
                    ['libro_id' => 5, 'tema_id' => 1],
                    ['libro_id' => 5, 'tema_id' => 7],
                    ['libro_id' => 6, 'tema_id' => 8],
                    ['libro_id' => 6, 'tema_id' => 9],
                    ['libro_id' => 7, 'tema_id' => 10],
                    ['libro_id' => 8, 'tema_id' => 11],
                    ['libro_id' => 9, 'tema_id' => 4],
                    ['libro_id' => 10, 'tema_id' => 12],
                    ['libro_id' => 11, 'tema_id' => 13],
                    ['libro_id' => 12, 'tema_id' => 3],
                    ['libro_id' => 13, 'tema_id' => 14],
                    ['libro_id' => 14, 'tema_id' => 15],
                    ['libro_id' => 15, 'tema_id' => 2],
                ]);
    }
}
