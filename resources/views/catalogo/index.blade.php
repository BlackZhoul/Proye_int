@extends('layouts.navbar')
@section('content')
<div class="min-h-screen flex flex-col">
    <div class="flex-grow container mx-auto mt-8 mb-20 flex">
        <!-- Formulario-->
        <div id="form-container" class="w-1/3 p-4 bg-white shadow-md rounded-lg">
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
                <button type="button" id="toggle-advanced" class="text-blue-500 text-sm mt-2 inline-block underline">Búsqueda avanzada</button>

                <div id="advanced-options" class="hidden mt-4">
                    <div class="mb-4">
                        <label for="tipo_documento" class="block text-gray-700 font-bold mb-2">Tipo de documento</label>
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
                        <label for="carrera" class="block text-gray-700 font-bold mb-2">Departamento de carrera</label>
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
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Buscar
                </button>
            </form>
        </div>

        <!-- Resultados -->
        <div class="w-3/4 p-4 relative ml-6">
            <h2 class="text-xl font-semibold mb-4">Resultados</h2>
            <div id="selected-book-info" class="hidden p-4 bg-white shadow-md rounded-lg fixed top-16 right-16">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Libro seleccionado</h3>
                    <button id="close-button" class="text-red-500 hover:text-red-700 focus:outline-none">
                        &times;
                    </button>
                </div>
                <p id="book-title" class="text-gray-700"></p>
                <button id="borrow-button"
                    class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    Prestar libro
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <!-- Cards -->
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex" onclick="selectBook(this, 'Simulation with arena')">
                    <img src="URL_DE_LA_IMAGEN_DEL_LIBRO" alt="Libro" class="w-1/3 object-cover rounded-l-lg">
                    <div class="ml-4">
                        <h3 class="text-lg font-bold mb-2">Simulation with arena</h3>
                        <p class="text-gray-700">Por: Katon, W. David, autor.</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <p class="text-gray-700">Edición: Séptima edición.</p>
                        <p class="text-gray-700">Clasificación: 0033 K37</p>
                        <p class="text-gray-700">Formato: Libros</p>
                        <p class="text-gray-700">Disponible: 1</p>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex" onclick="selectBook(this, 'Otro libro')">
                    <img src="URL_DE_LA_IMAGEN_DEL_LIBRO" alt="Libro" class="w-1/3 object-cover rounded-l-lg">
                    <div class="ml-4">
                        <h3 class="text-lg font-bold mb-2">Otro libro</h3>
                        <p class="text-gray-700">Por: Autor Ejemplo.</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <p class="text-gray-700">Edición: Primera edición.</p>
                        <p class="text-gray-700">Clasificación: 0044 E56</p>
                        <p class="text-gray-700">Formato: Libros</p>
                        <p class="text-gray-700">Disponible: 3</p>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex" onclick="selectBook(this, 'Otro libro')">
                    <img src="URL_DE_LA_IMAGEN_DEL_LIBRO" alt="Libro" class="w-1/3 object-cover rounded-l-lg">
                    <div class="ml-4">
                        <h3 class="text-lg font-bold mb-2">Otro libro</h3>
                        <p class="text-gray-700">Por: Autor Ejemplo.</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <p class="text-gray-700">Edición: Primera edición.</p>
                        <p class="text-gray-700">Clasificación: 0044 E56</p>
                        <p class="text-gray-700">Formato: Libros</p>
                        <p class="text-gray-700">Disponible: 3</p>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg cursor-pointer select-none flex" onclick="selectBook(this, 'Otro libro')">
                    <img src="URL_DE_LA_IMAGEN_DEL_LIBRO" alt="Libro" class="w-1/3 object-cover rounded-l-lg">
                    <div class="ml-4">
                        <h3 class="text-lg font-bold mb-2">Otro libro</h3>
                        <p class="text-gray-700">Por: Autor Ejemplo.</p>
                        <p class="text-gray-700">Fecha de publicación: 2024</p>
                        <p class="text-gray-700">Edición: Primera edición.</p>
                        <p class="text-gray-700">Clasificación: 0044 E56</p>
                        <p class="text-gray-700">Formato: Libros</p>
                        <p class="text-gray-700">Disponible: 3</p>
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
        // Desmarcar cualquier tarjeta previamente seleccionada
        var previouslySelected = document.querySelector('.selected');
        if (previouslySelected) {
            previouslySelected.classList.remove('selected');
        }

        // Marcar la tarjeta actual como seleccionada
        element.classList.add('selected');

        // Mostrar información del libro seleccionado
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
