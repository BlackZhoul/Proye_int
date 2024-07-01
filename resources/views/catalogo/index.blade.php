@extends('layouts.navbar')

@section('content')
<div class="min-h-screen flex flex-col">
    <div class="flex-grow container mx-auto mt-8 mb-20 flex flex-col lg:flex-row">
        <div id="form-container"
            class="w-full lg:w-1/3 p-4 bg-white shadow-md rounded-lg mb-4 lg:mb-0 lg:mr-4 overflow-hidden">
            <h2 class="text-xl font-semibold mb-4">Catálogo</h2>
            <form>
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
                    <input type="text" id="nombre" name="nombre"
                        class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Buscar por nombre o palabra clave">
                </div>
                <div class="mb-4">
                    <label for="sede" class="block text-gray-700 font-bold mb-2">Sede</label>
                    <select id="sede" name="sede"
                        class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Selecciona una opción</option>
                        <option>Campus Lima</option>
                        <option>Campus Arequipa</option>
                        <option>Campus Trujillo</option>
                    </select>
                </div>
                <button type="button" id="toggle-advanced"
                    class="text-blue-500 text-sm mt-2 inline-block underline">Búsqueda avanzada</button>

                <div id="advanced-options" class="hidden mt-4">
                    <div class="mb-4">
                        <label for="tipo_documento"
                            class="block text-gray-700 font-bold mb-2">Tipo de documento</label>
                        <select id="tipo_documento" name="tipo_documento"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>Selecciona una opción</option>
                            <option>Libros</option>
                            <option>Proyectos de titulación</option>
                            <option>Monografías</option>
                            <option>Quechua</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="carrera" class="block text-gray-700 font-bold mb-2">Departamento de
                            carrera</label>
                        <select id="carrera" name="carrera"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>Selecciona una opción</option>
                            <option>Tecnología Digital</option>
                            <option>Mecánica y Aviación</option>
                            <option>Minería, Procesos Químico y Metalúrgicos</option>
                            <option>Mecatrónica</option>
                            <option>Electricidad y Electrónica</option>
                            <option>Gestión y Producción</option>
                            <option>Seguridad y Salud en el trabajo</option>
                            <option>Tecnología Agrícola</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="idioma" class="block text-gray-700 font-bold mb-2">Idioma</label>
                        <select id="idioma" name="idioma"
                            class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>Selecciona una opción</option>
                            <option>Alemán</option>
                            <option>Catalán</option>
                            <option>Español</option>
                            <option>Francés</option>
                            <option>Inglés</option>
                            <option>Italiano</option>
                            <option>Portugués</option>
                            <option>Quechua</option>
                            <option>Vasco</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Buscar
                    </button>
                </div>
            </form>
        </div>

        <!-- Resultados -->
        <div class="w-full lg:w-2/3 p-4">
            <h2 class="text-xl font-semibold mb-4">Resultados</h2>
            <div id="selected-book-info"
                class="hidden p-4 bg-white shadow-md rounded-lg fixed top-16 right-0 lg:right-16 lg:w-80">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Libro seleccionado</h3>
                    <button id="close-button"
                        class="text-red-500 hover:text-red-700 focus:outline-none">
                        &times;
                    </button>
                </div>
                <p id="book-title" class="text-gray-700"></p>
                <button id="borrow-button"
                    class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    Prestar libro
                </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Cards -->
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex flex-col"
                    onclick="selectBook(this, 'Simulation with arena')">
                    <img src="{{ asset('images/simulation.jpg') }}" alt="Libro"
                        class="w-full h-96 sm:h-auto object-cover rounded-lg mb-4">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold mb-2">Simulation with arena</h3>
                        <p class="text-gray-700">Por: Katon, W. David</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <div class="mt-auto">
                            <p class="text-gray-700">Edición: Séptima edición</p>
                            <p class="text-gray-700">Clasificación: 0033 K37</p>
                            <p class="text-gray-700">Formato: Libros</p>
                            <p class="text-gray-700">Disponible: 1</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex flex-col"
                    onclick="selectBook(this, 'Introduccion a la Programacion')">
                    <img src="{{ asset('images/introduccion.jpg') }}" alt="Libro"
                        class="w-full h-96 sm:h-auto object-cover rounded-lg mb-4">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold mb-2">Introduccion a la Programacion</h3>
                        <p class="text-gray-700">Por: Charte Ojeda, Francisco</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <div class="mt-auto">
                            <p class="text-gray-700">Edición: Primera edición</p>
                            <p class="text-gray-700">Clasificación: 0044 E56</p>
                            <p class="text-gray-700">Formato: Libros</p>
                            <p class="text-gray-700">Disponible: 3</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex flex-col"
                    onclick="selectBook(this, 'Como programar en java')">
                    <img src="{{ asset('images/java.jpg') }}" alt="Libro"
                        class="w-full h-96 sm:h-auto object-cover rounded-lg mb-4">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold mb-2">Como programar en java</h3>
                        <p class="text-gray-700">Por: Harvey M. Deitel</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <div class="mt-auto">
                            <p class="text-gray-700">Edición: Novena edición</p>
                            <p class="text-gray-700">Clasificación: 0044 H37</p>
                            <p class="text-gray-700">Formato: Libros</p>
                            <p class="text-gray-700">Disponible: 2</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex flex-col"
                    onclick="selectBook(this, 'Programación Para Principiantes')">
                    <img src="{{ asset('images/p_python.jpg') }}" alt="Libro"
                        class="w-full h-96 sm:h-auto object-cover rounded-lg mb-4">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold mb-2">Programación Para Principiantes</h3>
                        <p class="text-gray-700">Por: Alexander Cane</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <div class="mt-auto">
                            <p class="text-gray-700">Edición: Primera edición</p>
                            <p class="text-gray-700">Clasificación: 0044 E56</p>
                            <p class="text-gray-700">Formato: Libros</p>
                            <p class="text-gray-700">Disponible: 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggle-advanced').addEventListener('click', function () {
        var advancedOptions = document.getElementById('advanced-options');
        var formContainer = document.getElementById('form-container');
        advancedOptions.classList.toggle('hidden');
        formContainer.classList.toggle('extended-form');
    });

    function selectBook(element, title) {
        var previouslySelected = document.querySelector('.selected');
        if (previouslySelected) {
            previouslySelected.classList.remove('selected');
        }

        element.classList.add('selected');

        var bookInfo = document.getElementById('selected-book-info');
        var bookTitle = document.getElementById('book-title');
        bookTitle.textContent = title;
        bookInfo.classList.remove('hidden');
    }

    document.getElementById('close-button').addEventListener('click', function () {
        var bookInfo = document.getElementById('selected-book-info');
        bookInfo.classList.add('hidden');

        var previouslySelected = document.querySelector('.selected');
        if (previouslySelected) {
            previouslySelected.classList.remove('selected');
        }
    });
</script>
@endsection
