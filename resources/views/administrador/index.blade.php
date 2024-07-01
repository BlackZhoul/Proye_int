@extends('layouts.navbar')
<!-- ESTA ES LA PÁGINA DE ADMINISTRADOR -->
@section('content')
    <div class="flex justify-center items-center min-h-screen px-4">
        <!-- Contenedor para la imagen y el formulario -->
        <div class="relative w-full flex justify-center items-center mt-2 mb-2">
            <!-- Imagen -->
            <div class="relative w-2/4 h-[600px]">
                <img src="{{ asset('images/administracion.png') }}" alt="Library Image" class="object-cover w-full h-full rounded-lg shadow-md">
            </div>
            <!-- Texto y formulario al lado derecho de la imagen -->
            <div class="ml-8 flex flex-col items-start">
                <h2 class="text-2xl font-bold mb-4 text-left">Bienvenido al Administrador de Biblioteca</h2>
                <!-- Formulario -->
                <div class="relative w-full max-w-xl">
                    <div class="bg-white shadow-md rounded-lg p-10 w-full">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Usuario</label>
                                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Ingrese su usuario">
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block text-gray-700">Contraseña</label>
                                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Ingrese su contraseña">
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200"><a href="{{ route('reservas') }}" class="nav-link">
                                            Ingresar
                                        </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
