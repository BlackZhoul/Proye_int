@extends('layouts.navbar')

@section('repositorio_banner')
    <div class="flex items-center justify-center sm:flex-row py-10 bg-[#2DB4D1] ">
        <h1 class="text-3xl font-black text-center md:text-7xl ">
            <span class="text-dark_black">REPOSITORIO</span><br><span class="text-white md:ml-14">INSTITUCIONAL</span>
        </h1>
    </div>
    <div class="hidden sm:flex items-center bg-stone-200 p-4 ml-10">
        <img src="{{ asset('images/hogar.png') }}" alt="Ícono" class="w-4 mr-4">
        <p>Repositorio Institucional de Tecsup</p>
    </div>
@endsection

@section('content')
<div class="px-8"> 
    <div class="flex flex-col sm:flex-row justify-between">
        <div class="w-full sm:w-1/4 bg-white p-4 mr-4 mb-4 sm:mb-0 shadow-lg rounded-lg">
            <div class="mb-4">
                <input type="text" placeholder="Buscar en todo el repositorio..." class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            <h2 class="text-xl font-semibold mb-4">Listar</h2>
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-black text-white p-2">
                    <a href="#" class="text-gray-200 hover:text-blue-300">Todo el repositorio</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Comunidades & colecciones</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Por fecha de publicación</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Autores</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Títulos</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Sedes</a>
                </div>
                <div class="p-2">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Palabras clave</a>
                </div>
            </div>
            <br>
            <h2 class="text-xl font-semibold mb-4">Descubre</h2>
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-black text-white p-2">
                    <a href="#" class="text-gray-200 hover:text-blue-300">Campus</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Lima</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Arequipa</a>
                </div>
                <div class="p-2 border-b border-gray-300">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Trujillo</a>
                </div>
            </div>
           
        </div>
        
        <div class="w-full sm:w-3/4">
            <div class="container mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <p class="text-gray-700 mb-4">
                        El Repositorio Institucional de CEDITEC en TECSUP recopila y difunde la producción académica y científica de la institución. Ofrece acceso abierto a estos recursos y protege los derechos de los autores mediante licencias adecuadas.
                    </p>
                    <h2 class="text-xl font-semibold mb-4">Comunidades</h2>
                    <p class="mb-4">Elija una comunidad para listar sus colecciones</p>
                    <ul class="mb-6">
                        <li class="text-blue-500 underline mb-2">
                            <a href="#">Artículos [0]</a>
                        </li>
                        <li class="text-blue-500 underline mb-2">
                            <a href="#">Libros [0]</a>
                        </li>
                        <li class="text-blue-500 underline mb-2">
                            <a href="#">Tesis [0]</a>
                        </li>
                        <li class="text-blue-500 underline">
                            <a href="#">Trabajos de investigación [0]</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4">Añadido recientemente</h2>
                    <div class="flex flex-col mb-4">
                        <div class="mb-4 flex items-center">
                            <div class="h-40 w-40 bg-gray-200 rounded-lg mr-4"></div>
                            <div>
                                <h3 class="text-blue-500 font-semibold mb-2">
                                    Diseño y análisis de fatiga de un semieje para el sistema de transmisión de un vehículo eléctrico en la competencia Fórmula SAE
                                </h3>
                                <p class="text-gray-600 mb-1">Ulloque Echevarría, Víctor Antonio (Universidad de Ingeniería y Tecnología, 2024)</p>
                                <p class="text-green-500">Acceso abierto</p>
                                <p class="text-gray-700">
                                Las fallas por fatiga son un fenómeno muy recurrente y difícil de predecir en los sistemas mecánicos. </p>
                            </div>
                        </div>
                        <div class="mb-4 flex items-center">
                            <div class="h-40 w-40 bg-gray-200 rounded-lg mr-4"></div>
                            <div>
                                <h3 class="text-blue-500 font-semibold mb-2">
                                    Diseño y análisis de fatiga de un semieje para el sistema de transmisión de un vehículo eléctrico en la competencia Fórmula SAE
                                </h3>
                                <p class="text-gray-600 mb-1">Ulloque Echevarría, Víctor Antonio (Universidad de Ingeniería y Tecnología, 2024)</p>
                                <p class="text-green-500">Acceso abierto</p>
                                <p class="text-gray-700">
                                Las fallas por fatiga son un fenómeno muy recurrente y difícil de predecir en los sistemas mecánicos. </p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-40 w-40 bg-gray-200 rounded-lg mr-4"></div>
                            <div>
                                <h3 class="text-blue-500 font-semibold mb-2">
                                    Diseño y análisis de fatiga de un semieje para el sistema de transmisión de un vehículo eléctrico en la competencia Fórmula SAE
                                </h3>
                                <p class="text-gray-600 mb-1">Ulloque Echevarría, Víctor Antonio (Universidad de Ingeniería y Tecnología, 2024)</p>
                                <p class="text-green-500">Acceso abierto</p>
                                <p class="text-gray-700">
                                Las fallas por fatiga son un fenómeno muy recurrente y difícil de predecir en los sistemas mecánicos. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
