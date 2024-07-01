<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ebook;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ebook 1
        Ebook::create([
            'titulo' => 'Introducción a la Programación en Python',
            'eisbn' => 1234567890,
            'anio_publicacion' => '2021-03-15',
            'descripcion' => 'Introducción práctica a la programación utilizando Python.',
            'idioma' => 'Español',
            'nro_paginas' => 250,
            'descriptores' => 'Programación, Python',
            'url' => 'https://example.com/ebook1.pdf',
            'editorial_id' => 1,
            'departamento_id' => 5,
            'autor_id' => 1,
        ]);

        // Ebook 2
        Ebook::create([
            'titulo' => 'Historia del Arte Contemporáneo',
            'eisbn' => 2395678901,
            'anio_publicacion' => '2020-07-20',
            'descripcion' => 'Análisis del arte contemporáneo desde el siglo XX hasta la actualidad.',
            'idioma' => 'Español',
            'nro_paginas' => 300,
            'descriptores' => 'Arte, Contemporáneo',
            'url' => 'https://example.com/ebook2.pdf',
            'editorial_id' => 2,
            'departamento_id' => 3,
            'autor_id' => 3,
        ]);

        // Ebook 3
        Ebook::create([
            'titulo' => 'Algoritmos Avanzados y Estructuras de Datos',
            'eisbn' => 3456789012,
            'anio_publicacion' => '2019-10-10',
            'descripcion' => 'Estudio avanzado sobre algoritmos y estructuras de datos.',
            'idioma' => 'Inglés',
            'nro_paginas' => 400,
            'descriptores' => 'Algoritmos, Estructuras de Datos',
            'url' => 'https://example.com/ebook3.pdf',
            'editorial_id' => 3,
            'departamento_id' => 6,
            'autor_id' => 5,
        ]);

        // Ebook 4
        Ebook::create([
            'titulo' => 'Economía Globalizada',
            'eisbn' => 4567890103,
            'anio_publicacion' => '2018-05-05',
            'descripcion' => 'Análisis de la economía global y sus impactos.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'descriptores' => 'Economía, Globalización',
            'url' => 'https://example.com/ebook4.pdf',
            'editorial_id' => 1,
            'departamento_id' => 7,
            'autor_id' => 7,
        ]);

        // Ebook 5
        Ebook::create([
            'titulo' => 'Inteligencia Artificial: Fundamentos y Aplicaciones',
            'eisbn' => 5678901234,
            'anio_publicacion' => '2022-04-25',
            'descripcion' => 'Estudio exhaustivo sobre la inteligencia artificial y sus aplicaciones prácticas.',
            'idioma' => 'Español',
            'nro_paginas' => 300,
            'descriptores' => 'Inteligencia Artificial, Tecnología',
            'url' => 'https://example.com/ebook5.pdf',
            'editorial_id' => 2,
            'departamento_id' => 5,
            'autor_id' => 2,
        ]);
        // Ebook 6
        Ebook::create([
            'titulo' => 'Introducción a la Bioinformática',
            'eisbn' => 6789013345,
            'anio_publicacion' => '2021-09-20',
            'descripcion' => 'Introducción a los principios básicos de la bioinformática.',
            'idioma' => 'Español',
            'nro_paginas' => 280,
            'descriptores' => 'Bioinformática, Biología',
            'url' => 'https://example.com/ebook6.pdf',
            'editorial_id' => 3,
            'departamento_id' => 1,
            'autor_id' => 4,
        ]);

        // Ebook 7
        Ebook::create([
            'titulo' => 'Introducción a la Filosofía',
            'eisbn' => 7890123456,
            'anio_publicacion' => '2020-12-10',
            'descripcion' => 'Introducción a los principios básicos de la filosofía occidental.',
            'idioma' => 'Español',
            'nro_paginas' => 320,
            'descriptores' => 'Filosofía',
            'url' => 'https://example.com/ebook7.pdf',
            'editorial_id' => 1,
            'departamento_id' => 4,
            'autor_id' => 6,
        ]);

        // Ebook 8
        Ebook::create([
            'titulo' => 'Diseño Gráfico: Fundamentos y Prácticas',
            'eisbn' => 8901234567,
            'anio_publicacion' => '2019-08-15',
            'descripcion' => 'Estudio completo sobre los fundamentos y técnicas del diseño gráfico.',
            'idioma' => 'Español',
            'nro_paginas' => 300,
            'descriptores' => 'Diseño Gráfico, Arte',
            'url' => 'https://example.com/ebook8.pdf',
            'editorial_id' => 2,
            'departamento_id' => 2,
            'autor_id' => 8,
        ]);

        // Ebook 9
        Ebook::create([
            'titulo' => 'Estadística Aplicada a las Ciencias Sociales',
            'eisbn' => 9012345678,
            'anio_publicacion' => '2020-06-25',
            'descripcion' => 'Aplicación de la estadística en el análisis de datos de ciencias sociales.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'descriptores' => 'Estadística, Ciencias Sociales',
            'url' => 'https://example.com/ebook9.pdf',
            'editorial_id' => 3,
            'departamento_id' => 7,
            'autor_id' => 10,
        ]);

        // Ebook 10
        Ebook::create([
            'titulo' => 'Historia de la Psicología',
            'eisbn' => 1234567897,
            'anio_publicacion' => '2018-10-30',
            'descripcion' => 'Estudio histórico sobre los principales hitos de la psicología moderna.',
            'idioma' => 'Español',
            'nro_paginas' => 380,
            'descriptores' => 'Psicología, Historia',
            'url' => 'https://example.com/ebook10.pdf',
            'editorial_id' => 1,
            'departamento_id' => 3,
            'autor_id' => 9,
        ]);

        // Ebook 11
        Ebook::create([
            'titulo' => 'Programación Avanzada en Java',
            'eisbn' => 2345678901,
            'anio_publicacion' => '2021-05-20',
            'descripcion' => 'Estudio avanzado sobre la programación orientada a objetos con Java.',
            'idioma' => 'Inglés',
            'nro_paginas' => 400,
            'descriptores' => 'Programación, Java',
            'url' => 'https://example.com/ebook11.pdf',
            'editorial_id' => 2,
            'departamento_id' => 5,
            'autor_id' => 2,
        ]);

        // Ebook 12
        Ebook::create([
            'titulo' => 'Biología Celular y Molecular',
            'eisbn' => 3456089012,
            'anio_publicacion' => '2019-12-15',
            'descripcion' => 'Estudio avanzado sobre biología celular y molecular.',
            'idioma' => 'Español',
            'nro_paginas' => 320,
            'descriptores' => 'Biología, Celular, Molecular',
            'url' => 'https://example.com/ebook12.pdf',
            'editorial_id' => 3,
            'departamento_id' => 1,
            'autor_id' => 7,
        ]);

        // Ebook 13
        Ebook::create([
            'titulo' => 'Derecho Internacional Público',
            'eisbn' => 4567890123,
            'anio_publicacion' => '2020-09-10',
            'descripcion' => 'Introducción al derecho internacional público y sus principios.',
            'idioma' => 'Español',
            'nro_paginas' => 350,
            'descriptores' => 'Derecho, Internacional',
            'url' => 'https://example.com/ebook13.pdf',
            'editorial_id' => 1,
            'departamento_id' => 8,
            'autor_id' => 5,
        ]);

        // Ebook 14
        Ebook::create([
            'titulo' => 'Marketing Digital: Estrategias y Herramientas',
            'eisbn' => 5678961234,
            'anio_publicacion' => '2022-02-28',
            'descripcion' => 'Estudio completo sobre el marketing digital y sus técnicas modernas.',
            'idioma' => 'Español',
            'nro_paginas' => 300,
            'descriptores' => 'Marketing, Digital',
            'url' => 'https://example.com/ebook14.pdf',
            'editorial_id' => 2,
            'departamento_id' => 4,
            'autor_id' => 3,
        ]);

        // Ebook 15
        Ebook::create([
            'titulo' => 'Introducción a la Robótica',
            'eisbn' => 6789012345,
            'anio_publicacion' => '2018-11-20',
            'descripcion' => 'Introducción a los principios básicos de la robótica y sus aplicaciones.',
            'idioma' => 'Español',
            'nro_paginas' => 280,
            'descriptores' => 'Robótica, Tecnología',
            'url' => 'https://example.com/ebook15.pdf',
            'editorial_id' => 3,
            'departamento_id' => 6,
            'autor_id' => 1,
        ]);
    }
}
