@extends('layouts.navbar')
@section('content')

<div class="container mx-auto py-10">
        <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
            <button class="text-blue-500 font-semibold mb-4" onclick="window.history.back()">
                &larr; Atrás
            </button>
            <h2 class="text-xl font-bold mb-6">Reserva de salas de estudio</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sede">
                        Sede
                    </label>
                    <select id="sede" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option>Seleccionar sede</option>
                        <option>Lima</option>
                        <option>Arequipa</option>
                        <option>Trujillo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fechas">
                        Seleccionar fecha
                    </label>
                    <select id="fechas" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option>Seleccione una opción</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="idioma">
                        Salas disponibles
                    </label>
                    <select id="idioma" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option>Seleccione una opción</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        RESERVAR
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
