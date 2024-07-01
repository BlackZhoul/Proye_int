<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Libro 1
        Libro::create([
            'titulo' => 'Introducción a la Programación',
            'isbn' => 1234567890,
            'anio_publicacion' => '2020-01-01',
            'descripcion' => 'Libro introductorio sobre programación.',
            'idioma' => 'Español',
            'nro_paginas' => 300,
            'dewey' => '005.1',
            'descriptores' => 'Programación, Informática',
            'editorial_id' => 1,
            'departamento_id' => 5,
            'autor_id' => 1,
        ]);

        // Libro 2
        Libro::create([
            'titulo' => 'Historia del Arte Moderno',
            'isbn' => 2345678901,
            'anio_publicacion' => '2018-06-15',
            'descripcion' => 'Estudio exhaustivo sobre el arte moderno.',
            'idioma' => 'Español',
            'nro_paginas' => 450,
            'dewey' => '709',
            'descriptores' => 'Arte, Historia',
            'editorial_id' => 2,
            'departamento_id' => 3,
            'autor_id' => 3,
        ]);

        // Libro 3
        Libro::create([
            'titulo' => 'Matemáticas Avanzadas',
            'isbn' => 3456789012,
            'anio_publicacion' => '2019-11-20',
            'descripcion' => 'Libro avanzado sobre matemáticas.',
            'idioma' => 'Inglés',
            'nro_paginas' => 500,
            'dewey' => '510',
            'descriptores' => 'Matemáticas, Educación',
            'editorial_id' => 3,
            'departamento_id' => 6,
            'autor_id' => 5,
        ]);

        // Libro 4
        Libro::create([
            'titulo' => 'Economía y Sociedad',
            'isbn' => 4567890123,
            'anio_publicacion' => '2017-03-10',
            'descripcion' => 'Estudio sobre la economía y su impacto en la sociedad.',
            'idioma' => 'Español',
            'nro_paginas' => 400,
            'dewey' => '330',
            'descriptores' => 'Economía, Sociedad',
            'editorial_id' => 1,
            'departamento_id' => 7,
            'autor_id' => 7,
        ]);

        // Libro 5
        Libro::create([
            'titulo' => 'Programación Avanzada con Laravel',
            'isbn' => 5678901234,
            'anio_publicacion' => '2021-08-05',
            'descripcion' => 'Guía avanzada para programadores utilizando Laravel.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'dewey' => '005.133',
            'descriptores' => 'Programación, Laravel',
            'editorial_id' => 2,
            'departamento_id' => 5,
            'autor_id' => 2,
        ]);

        // Libro 6
        Libro::create([
            'titulo' => 'Historia del Siglo XX',
            'isbn' => 6789012345,
            'anio_publicacion' => '2016-12-20',
            'descripcion' => 'Estudio sobre los eventos más importantes del siglo XX.',
            'idioma' => 'Español',
            'nro_paginas' => 550,
            'dewey' => '909.82',
            'descriptores' => 'Historia, Siglo XX',
            'editorial_id' => 3,
            'departamento_id' => 3,
            'autor_id' => 4,
        ]);
        // Libro 7
        Libro::create([
            'titulo' => 'Fundamentos de Ingeniería Civil',
            'isbn' => 7890123456,
            'anio_publicacion' => '2020-05-15',
            'descripcion' => 'Introducción a los principios básicos de la ingeniería civil.',
            'idioma' => 'Español',
            'nro_paginas' => 400,
            'dewey' => '624',
            'descriptores' => 'Ingeniería Civil',
            'editorial_id' => 1,
            'departamento_id' => 8,
            'autor_id' => 8,
        ]);

        // Libro 8
        Libro::create([
            'titulo' => 'Literatura Contemporánea',
            'isbn' => 8901234567,
            'anio_publicacion' => '2019-11-30',
            'descripcion' => 'Antología de escritores contemporáneos.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'dewey' => '809',
            'descriptores' => 'Literatura, Contemporánea',
            'editorial_id' => 2,
            'departamento_id' => 4,
            'autor_id' => 10,
        ]);

        // Libro 9
        Libro::create([
            'titulo' => 'Introducción a la Economía',
            'isbn' => 9012345678,
            'anio_publicacion' => '2018-08-20',
            'descripcion' => 'Principios básicos de la economía moderna.',
            'idioma' => 'Español',
            'nro_paginas' => 320,
            'dewey' => '330',
            'descriptores' => 'Economía',
            'editorial_id' => 3,
            'departamento_id' => 7,
            'autor_id' => 6,
        ]);

        // Libro 10
        Libro::create([
            'titulo' => 'Química Orgánica Avanzada',
            'isbn' => 1234567891,
            'anio_publicacion' => '2022-02-10',
            'descripcion' => 'Estudio avanzado sobre la química orgánica.',
            'idioma' => 'Inglés',
            'nro_paginas' => 450,
            'dewey' => '547',
            'descriptores' => 'Química, Orgánica',
            'editorial_id' => 2,
            'departamento_id' => 1,
            'autor_id' => 9,
        ]);
        // Libro 11
        Libro::create([
            'titulo' => 'Bioquímica Avanzada',
            'isbn' => 2345678912,
            'anio_publicacion' => '2021-07-25',
            'descripcion' => 'Estudio avanzado sobre la bioquímica molecular.',
            'idioma' => 'Inglés',
            'nro_paginas' => 400,
            'dewey' => '572',
            'descriptores' => 'Bioquímica, Biología Molecular',
            'editorial_id' => 3,
            'departamento_id' => 1,
            'autor_id' => 9,
        ]);

        // Libro 12
        Libro::create([
            'titulo' => 'Arquitectura Moderna',
            'isbn' => 3456789123,
            'anio_publicacion' => '2019-04-15',
            'descripcion' => 'Estudio sobre la arquitectura moderna del siglo XX.',
            'idioma' => 'Español',
            'nro_paginas' => 380,
            'dewey' => '720.9',
            'descriptores' => 'Arquitectura, Modernismo',
            'editorial_id' => 1,
            'departamento_id' => 2,
            'autor_id' => 6,
        ]);

        // Libro 13
        Libro::create([
            'titulo' => 'Psicología del Desarrollo',
            'isbn' => 4567891234,
            'anio_publicacion' => '2020-10-30',
            'descripcion' => 'Estudio sobre la psicología del desarrollo humano.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'dewey' => '155.4',
            'descriptores' => 'Psicología, Desarrollo Humano',
            'editorial_id' => 2,
            'departamento_id' => 4,
            'autor_id' => 10,
        ]);

        // Libro 14
        Libro::create([
            'titulo' => 'Física Cuántica',
            'isbn' => 5678912345,
            'anio_publicacion' => '2022-01-20',
            'descripcion' => 'Estudio avanzado sobre la física cuántica.',
            'idioma' => 'Inglés',
            'nro_paginas' => 420,
            'dewey' => '530.12',
            'descriptores' => 'Física, Cuántica',
            'editorial_id' => 3,
            'departamento_id' => 6,
            'autor_id' => 8,
        ]);

        // Libro 15
        Libro::create([
            'titulo' => 'Historia de América Latina',
            'isbn' => 6789123456,
            'anio_publicacion' => '2018-08-10',
            'descripcion' => 'Estudio sobre la historia de América Latina desde la precolombina hasta el presente.',
            'idioma' => 'Español',
            'nro_paginas' => 500,
            'dewey' => '980',
            'descriptores' => 'Historia, América Latina',
            'editorial_id' => 1,
            'departamento_id' => 3,
            'autor_id' => 5,
        ]);
    }
}
