@extends('layouts.navbar')
@section('content')
<div class="flex min-h-screen">
    <!-- Imagen del lado izquierdo ocupando el 30% del ancho y 100% de la altura -->
    <div class="w-1/3 h-screen">
        <img src="{{ asset('images/administracion.png') }}" alt="Imagen de administración" class="w-full h-full object-cover">
    </div>
    <!-- Contenido del lado derecho ocupando el 70% del ancho con margen interno -->
    <div class="w-2/3 flex flex-col p-8" style="margin-right: 2vw;">
        <a href="#" class="text-blue-500 flex items-center mb-4">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Atrás
        </a>
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center mr-3">
                <img src="{{ asset('images/reserva.png') }}"  alt="Icono de reservas" class="w-10 h-10 rounded-full">
            </div>
            <h2 class="text-2xl font-bold">Reservas</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Tarjeta 1 -->
            <div class="bg-white rounded-lg shadow-md p-4 w-full">
                <div class="h-32 bg-gray-300 rounded-md mb-4"></div>
                <h3 class="text-lg font-semibold mb-2">Reserva de salas de estudio</h3>
                <p class="text-gray-600 mb-1">
                    <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4 4 4-4M8 12l4 4 4-4"></path>
                    </svg>
                    1 a 2 horas al día
                </p>
                <p class="text-gray-600 mb-1">
                    <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-5 11h4M8 15h4"></path>
                    </svg>
                    8:00 a 6:00 p.m.
                </p>
                <a href="#" class="text-blue-500">Reserve aquí</a>
            </div>
            <!-- Tarjeta 2 -->
            <div class="bg-white rounded-lg shadow-md p-4 w-full">
                <div class="h-32 bg-gray-300 rounded-md mb-4"></div>
                <h3 class="text-lg font-semibold mb-2">Reserva de computadoras</h3>
                <p class="text-gray-600 mb-1">
                    <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4 4 4-4M8 12l4 4 4-4"></path>
                    </svg>
                    1 a 2 horas al día
                </p>
                <p class="text-gray-600 mb-1">
                    <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-5 11h4M8 15h4"></path>
                    </svg>
                    8:00 a 6:00 p.m.
                </p>
                <a href="#" class="text-blue-500">Reserve aquí</a>
            </div>
        </div>
    </div>
</div>
@endsection
