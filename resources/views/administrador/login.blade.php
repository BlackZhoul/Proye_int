{{-- @extends('layouts.navbar')
<!-- ESTA ES LA PÁGINA DE ADMINISTRADOR -->
@section('content')
    <div class="flex justify-center items-center min-h-screen px-4">
        <!-- Contenedor para la imagen y el formulario -->
        <div class="relative w-full flex justify-center items-center mt-1 mb-2">
            <!-- Imagen -->
            <div class="relative w-3/5">
                <img src="{{ asset('images/administracion.png') }}"  alt="Library Image" class="object-cover h-full w-full rounded-lg shadow-md">
            </div>
            <!-- Texto al lado derecho de la imagen -->
            <div class="ml-4 flex flex-col items-center">
                <h2 class="text-2xl font-bold mb-12 text-center">Bienvenide al Administrador de Biblioteca</h2>
                <!-- Formulario -->
                <div class="relative w-full max-w-md">
                    <div class="bg-white shadow-md rounded-lg p-8 w-full transform -translate-x-1/4">
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
                                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}