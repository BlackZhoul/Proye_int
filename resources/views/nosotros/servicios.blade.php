@extends('layouts.navbar')

@section('content')
    <div class="container mx-auto mt-4 px-4">
        <div class="inline-flex mb-4">
            <a href="#" class="text-gray-800 font-bold py-2 px-4 rounded-l block hover:bg-gray-200">
                Nosotros
            </a>
            <a href="#" class="text-gray-800 font-bold py-2 px-4 rounded-r block hover:bg-gray-200">
                Servicios
            </a>
        </div>

        <h2 class="text-2xl font-bold mb-4 text-center">Conoce los servicios de la biblioteca</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon1.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 1">
                <p class="font-semibold text-lg text-center">PC Internet</p>
                <p class="text-center">Acceso a computadoras con conexión a internet.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon2.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 2">
                <p class="font-semibold text-lg text-center">Sala de Lectura</p>
                <p class="text-center">Espacios diseñados para la lectura y estudio.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon3.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 3">
                <p class="font-semibold text-lg text-center">Estantería Abierta</p>
                <p class="text-center">Acceso abierto a estanterías con libros disponibles.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon4.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 4">
                <p class="font-semibold text-lg text-center">Salas de Trabajo</p>
                <p class="text-center">Espacios destinados para el trabajo y colaboración.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon5.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 5">
                <p class="font-semibold text-lg text-center">Acceso a Internet</p>
                <p class="text-center">Conexión wifi disponible en toda la biblioteca.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon6.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 6">
                <p class="font-semibold text-lg text-center">Préstamo de Materiales</p>
                <p class="text-center">Servicio de préstamo de libros y otros materiales.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md col-span-1 sm:col-span-2 lg:col-span-1 lg:col-start-2 mx-auto text-center">
                <img src="{{ asset('images/icon7.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 7">
                <p class="font-semibold text-lg text-center">Mesas de Trabajo</p>
                <p class="text-center">Espacios equipados con mesas para el trabajo individual.</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-4 text-center">Servicios en Línea</h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon8.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 8">
                <p class="font-semibold text-lg text-center">Catálogo en Línea</p>
                <p class="text-center">Consulta nuestro catálogo de libros disponible en línea.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon9.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 9">
                <p class="font-semibold text-lg text-center">Biblioteca Virtual</p>
                <p class="text-center">Accede a recursos digitales desde cualquier lugar.</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('images/icon10.png') }}" class="w-10 h-10 mx-auto mb-4" alt="Icono 10">
                <p class="font-semibold text-lg text-center">Repositorio TECSUP</p>
                <p class="text-center">Accede a repositorios académicos y proyectos de TECSUP.</p>
            </div>
        </div>
    </div>
@endsection
