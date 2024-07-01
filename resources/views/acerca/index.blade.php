@extends('layouts.navbar')

@section('content')
<div class="container mx-auto mt-8 mb-8">
    <div class="flex justify-start mb-4 ml-20">
        <a href="#" class="mr-4 text-black font-semibold">Nosotros</a>
        <a href="#" class="text-black font-semibold">Servicios</a>
    </div>
    <div class="flex flex-col sm:flex-row items-center justify-center mb-8">
        <div class="w-full sm:w-1/2 mb-4 sm:mb-0 flex justify-center">
            <div class="relative" style="width: 100%; max-width: 600px; height: 400px;">
                <div>
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
                    <div class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/modelo1.png') }}" alt="Modelo 1" />
                        <div class="absolute top-1/2 w-full flex justify-between z-20 px-4">
                            <label for="carousel-3" class="inline-block text-red-600 cursor-pointer -translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-2" class="inline-block text-red-600 cursor-pointer translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
                    <div class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/modelo2.png') }}" alt="Modelo 2" />
                        <div class="absolute top-1/2 w-full flex justify-between z-20 px-4">
                            <label for="carousel-1" class="inline-block text-blue-600 cursor-pointer -translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-3" class="inline-block text-blue-600 cursor-pointer translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" />
                    <div class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                        <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/modelo3.jpg') }}" alt="Modelo 3" />
                        <div class="absolute top-1/2 w-full flex justify-between z-20 px-4">
                            <label for="carousel-2" class="inline-block text-yellow-600 cursor-pointer -translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                                </svg>
                            </label>
                            <label for="carousel-1" class="inline-block text-yellow-600 cursor-pointer translate-x-5 rounded-full shadow-md active:translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 p-4">
            <h2 class="text-xl font-bold mb-2">CEDITEC: Centro de Documentación e Información</h2>
            <p class="mb-2">CEDITEC ofrece 17,000 ejemplares de libros, revistas, periódicos, manuales, catálogos, material audiovisual y proyectores. Con sedes en Lima, Arequipa y Trujillo, estamos al servicio de los estudiantes bajo un reglamento establecido.</p>

            <h3 class="text-lg font-semibold mb-2">Horario de atención:</h3>
            <div class="mb-4">
                <p><strong>LUNES A VIERNES - Campus Lima:</strong></p>
                <ul class="list-disc list-inside">
                    <li>TECSUP centro: 8:00 a 22:00</li>
                    <li>Sábado: 8:00 a 18:00 horas</li>
                </ul>
            </div>
            <div class="mb-4">
                <p><strong>LUNES A VIERNES - Campus Arequipa:</strong></p>
                <ul class="list-disc list-inside">
                    <li>TECSUP sur: 8:00 a 12:30 - 13:30 a 18:00 horas</li>
                </ul>
            </div>
            <div>
                <p><strong>LUNES A VIERNES - Campus Trujillo:</strong></p>
                <ul class="list-disc list-inside">
                    <li>TECSUP sur: 8:00 a 12:30 - 13:30 a 18:00 horas</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
