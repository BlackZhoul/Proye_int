@extends('layouts.navbar')

@section('content')
    <div class="container mx-auto mt-4 px-4">
        <h2 class="text-2xl font-bold mb-4 text-center">Noticias de Tecnología </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Nueva Tecnología de Realidad Aumentada</p>
                <p class="text-center">Se ha desarrollado una nueva tecnología de realidad aumentada que permite interactuar con entornos virtuales de manera más realista.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Avances en Inteligencia Artificial</p>
                <p class="text-center">Investigadores han logrado un avance significativo en algoritmos de inteligencia artificial que mejoran la precisión y velocidad del procesamiento de datos.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Nanotecnología para la Medicina</p>
                <p class="text-center">Se está desarrollando una nueva generación de nanorobots médicos capaces de detectar y tratar enfermedades a nivel celular.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Robótica Avanzada en la Industria</p>
                <p class="text-center">Empresas líderes en robótica están implementando robots autónomos que optimizan los procesos industriales y reducen costos operativos.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Blockchain y la Revolución Financiera</p>
                <p class="text-center">La tecnología blockchain está transformando el sector financiero al proporcionar transacciones seguras y transparentes sin intermediarios.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="font-semibold text-lg text-center">Computación Cuántica y el Futuro de la Informática</p>
                <p class="text-center">Los avances en computación cuántica prometen revolucionar la informática con capacidades de procesamiento exponencialmente más rápidas.</p>
            </div>
        </div>
    </div>
@endsection