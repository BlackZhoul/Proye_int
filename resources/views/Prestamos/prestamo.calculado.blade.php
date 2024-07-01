@extends('layouts.navbar')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-start items-center mb-8">
        <a href="#" class="flex items-center text-blue-500 hover:text-blue-700">
            <img src="{{ asset('images/flecha_izquierda.png') }}" class="w-8 h-8 mr-2 cursor-pointer" alt="Flecha Izquierda">
            <span class="text-lg cursor-pointer">Atrás</span>
        </a>
    </div>

    <h2 class="text-2xl font-semibold mb-4 text-center">Préstamo de Calculadoras</h2>

    <form class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-auto">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="sede">
                Sede:
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede">
                    <option disabled selected value="">Selecciona tu campus</option>
                    <option value="Sede 1">Sede 1</option>
                    <option value="Sede 2">Sede 2</option>
                    <option value="Sede 3">Sede 3</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_salas">
                Fechas/Salas disponibles:
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fecha_salas">
                    <option disabled selected value="">Selecciona una opción</option>
                    <option value="Fecha 1">Fecha 1</option>
                    <option value="Fecha 2">Fecha 2</option>
                    <option value="Fecha 3">Fecha 3</option>
                    <option value="Fecha 4">Fecha 4</option>
                    <option value="Fecha 5">Fecha 5</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="carrera">
                Carrera:
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="carrera">
                    <option disabled selected value="">Selecciona tu carrera</option>
                    <option value="Procesos Químicos y Metalúrgicos">Procesos Químicos y Metalúrgicos</option>
                    <option value="Operaciones Mineras">Operaciones Mineras</option>
                    <option value="Aviónica y Mecánica Aeronáutica">Aviónica y Mecánica Aeronáutica</option>
                    <option value="Gestión y Mantenimiento de Maquinaria Industrial">Gestión y Mantenimiento de Maquinaria Industrial</option>
                    <option value="Gestión y Mantenimiento de Maquinaria Pesada">Gestión y Mantenimiento de Maquinaria Pesada</option>
                    <option value="Electrónica y Automatización Industrial">Electrónica y Automatización Industrial</option>
                    <option value="Mecatrónica Industrial">Mecatrónica Industrial</option>
                    <option value="Electricidad Industrial con Mención en Sistemas Eléctricos de Potencia">Electricidad Industrial con Mención en Sistemas Eléctricos de Potencia</option>
                    <option value="Producción y Gestión Industrial">Producción y Gestión Industrial</option>
                    <option value="Diseño Industrial">Diseño Industrial</option>
                    <option value="Big Data">Big Data</option>
                    <option value="Diseño y Desarrollo de Simuladores y Videojuegos">Diseño y Desarrollo de Simuladores y Videojuegos</option>
                    <option value="Diseño y Desarrollo de Software">Diseño y Desarrollo de Software</option>
                    <option value="Administración de Redes y Comunicaciones">Administración de Redes y Comunicaciones</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="idioma">
                Idioma:
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="idioma">
                    <option disabled selected value="">Selecciona el idioma</option>
                    <option value="Inglés">Inglés</option>
                    <option value="Español">Español</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Prestar
            </button>
        </div>
    </form>

</div>

<div class="mb-24"></div>

@endsection
