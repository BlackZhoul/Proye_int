@extends('layouts.navbar')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-start items-center mb-8"> 
        <a href="#" class="flex items-center text-blue-500 hover:text-blue-700">
            <img src="{{ asset('images/flecha_izquierda.png') }}" class="w-8 h-8 mr-2 cursor-pointer" alt="Flecha Izquierda">
            <span class="text-lg cursor-pointer">Atrás</span> 
        </a>
    </div>

    <div class="flex items-center mb-6">
        <img src="{{ asset('images/tablet.png') }}" class="w-10 h-10 mr-2" alt="Préstamo de Recursos">
        <span class="text-2xl font-semibold">Préstamo de Recursos</span>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
        <div class="bg-white rounded-lg shadow-md text-center overflow-hidden">
            <img src="{{ asset('images/p_tablet.jpg') }}" class="w-full h-48 object-cover" alt="Tablets">
            <div class="p-6">
                <p class="font-semibold text-xl mb-2">Préstamo de Tablets</p>
                <div class="flex justify-center items-center mb-2">
                    <img src="{{ asset('images/hora.png') }}" class="w-6 h-6 mr-2" alt="Icono de Tiempo">
                    <span>1 a 2 horas al día</span>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <img src="{{ asset('images/reloj.png') }}" class="w-6 h-6 mr-2" alt="Icono de Reloj">
                    <span>8:00 a 6:00 pm</span>
                </div>
                <a href="#" class="text-blue-500 hover:text-blue-700">Reserva aquí</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md text-center overflow-hidden">
            <img src="{{ asset('images/p_calculadora.jpg') }}" class="w-full h-48 object-cover" alt="Calculadoras">
            <div class="p-6">
                <p class="font-semibold text-xl mb-2">Préstamo de Calculadora</p>
                <div class="flex justify-center items-center mb-2">
                    <img src="{{ asset('images/hora.png') }}" class="w-6 h-6 mr-2" alt="Icono de Tiempo">
                    <span>1 a 2 horas al día</span>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <img src="{{ asset('images/reloj.png') }}" class="w-6 h-6 mr-2" alt="Icono de Reloj">
                    <span>8:00 a 6:00 pm</span>
                </div>
                <a href="#" class="text-blue-500 hover:text-blue-700">Reserva aquí</a>
            </div>
        </div>
    </div>
</div>

<div class="mb-24"></div>

@endsection
