@extends('layouts.navbar')
@section('content')

<div class="bg-blue-100 flex justify-center items-center" style="height: 100vh;">
<a href="#" class="absolute top-24 left-20 text-blue-600 hover:text-blue-700">Atrás</a>
  <h1 class="absolute top-32 left-1/2 transform -translate-x-1/2 text-gray-700 text-lg font-bold mb-2">Reserva de salas de estudio</h1>
  <div class="relative bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4" style="width: 737px; height: 486px; border-radius: 15px; border: 1px solid;">
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="campus">
        Sede
      </label>
      <div class="relative">
        <select id="campus" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <option value="">Seleccionar sede</option>
          <option value="">Lima</option>
          <option value="">Arequipa</option>
          <option value="">Trujillo</option>
        </select>
      </div>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="fechas">
        Seleccionar fecha
      </label>
      <div class="relative">
        <select id="fechas" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <!-- Opciones -->
        </select>
      </div>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="idioma">
        Sala disponible
      </label>
      <div class="relative">
        <select id="idioma" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <!-- Opciones -->
        </select>
      </div>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        RESERVAR
      </button>
    </div>
  </div>
</div>

@endsection
