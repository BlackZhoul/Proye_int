@extends('layouts.navbar')
@section('content')
<div class="flex flex-col min-h-screen p-8 bg-white">
    <a href="#" class="text-blue-500 flex items-center mb-4">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7M8 12h13"></path>
        </svg>
        Atrás
    </a>
    <h2 class="text-2xl font-bold mb-6" style="margin-left: 5vw;">Préstamo de libro</h2>
    <div class="flex justify-center items-center">
        <div class="bg-gray-100 shadow-md rounded-lg p-8 w-2/3">
            <form>
                <div class="mb-4">
                    <label for="campus" class="block text-gray-700 mb-2">Sede</label>
                    <select id="campus" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <option>Campus Lima</option>
                        <!-- Otras opciones aquí -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="fechas" class="block text-gray-700 mb-2">Fechas/salas disponibles</label>
                    <select id="fechas" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <option>Seleccione una opción</option>
                        <!-- Otras opciones aquí -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="carrera" class="block text-gray-700 mb-2">Carrera</label>
                    <select id="carrera" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <option>Seleccione una opción</option>
                        <!-- Otras opciones aquí -->
                    </select>
                </div>
                <div class="mb-6 mt-6">
                    <label for="idioma" class="block text-gray-700 mb-2">Idioma</label>
                    <select id="idioma" class="w-2/5 px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <option>Seleccione una opción</option>
                        <!-- Otras opciones aquí -->
                    </select>
                </div>
                <div class="flex justify-center">
                <button type="submit" class="bg-[#2DB4D1] text-white py-2 px-9 rounded-lg hover:bg-[#2DB4D1] transition duration-200">RESERVAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
