@extends('layouts.navbar')

@section('content')
    <div class="container mx-auto mt-4">
        <div class="relative inline-flex mb-4 nav-container">
            <a href="#" class="text-gray-800 font-bold py-2 px-4 rounded-l block hover:bg-gray-200 nav-link">
                Nosotros
            </a>
            <a href="#" class="text-gray-800 font-bold py-2 px-4 rounded-r block hover:bg-gray-200 nav-link">
                Servicios
            </a>
            <span class="absolute bottom-0 left-0 h-1 bg-gray-800 transition-all duration-300 nav-underline"></span>
        </div>

        <div class="sm:flex items-center">
            <div class="sm:w-1/2 mb-4 sm:mb-0">
                <div id="animation-carousel" class="relative w-full" data-carousel="static">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/modelo1.jpg') }}" class="absolute block w-full h-full object-cover top-0 left-0" alt="Modelo 1">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ asset('images/modelo2.jpg') }}" class="absolute block w-full h-full object-cover top-0 left-0" alt="Modelo 2">
                        </div>
                        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                            <img src="{{ asset('images/modelo3.jpg') }}" class="absolute block w-full h-full object-cover top-0 left-0" alt="Modelo 3">
                        </div>
                    </div>
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="sm:w-1/2 p-4">
                <h2 class="text-xl font-bold mb-2">CEDITEC</h2>
                <p class="mb-2">Ofrecemos 17,000 ejemplares de libros, revistas, proyectos, manuales, catálogos, material audiovisual y servicios en arqueología. Tenemos sedes en Lima, Arequipa y Trujillo, y estamos al servicio de los estudiantes bajo un reglamento establecido.</p>
                
                <h3 class="text-lg font-semibold mb-2">Horario de atención:</h3>
                <div>
                    <p><strong>LUNES A VIERNES - Campus Lima:</strong></p>
                    <ul>
                        <li>TECSUP centro: 8:00 a 22:00</li>
                        <li>TECSUP sur: 8:00 a 18:00 horas</li>
                    </ul>
                </div>
                <div>
                    <p><strong>SÁBADO - Campus Arequipa:</strong></p>
                    <ul>
                        <li>TECSUP sur: 8:00 a 18:00 horas</li>
                    </ul>
                </div>
                <div>
                    <p><strong>LUNES A VIERNES - Campus Trujillo:</strong></p>
                    <ul>
                        <li>TECSUP norte: 8:00 a 18:30</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
