@extends('layouts.navbar')
@section('meta-csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('content')
<div class="flex flex-col min-h-screen">
    <!-- Contenido principal -->
    <div class="flex-grow flex justify-center items-center ">
        <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg w-full max-w-4xl mt-6 px-8 py-8 mx-4 overflow-hidden sm:rounded-lg">
            <!-- Sección de imagen a la izquierda -->
            <div class="md:w-1/2  rounded-l-lg">
                <img src="{{ asset('images/inicio.png') }}" alt="" class="w-full">
            </div>
            <!-- Formulario -->
            <div class="md:w-1/2 p-8 rounded-r-lg">
                <div class="text-center bg-black p-6 rounded-lg">
                    <h2 class="text-4xl font-bold text-white mb-2">CEDITEC</h2>
                    <p class="text-white">Centro de Documentación e Información</p>
                </div>
                <form method="POST" action="{{ route('login') }}" class="mt-8">
                    @csrf
                    <!-- Dirección de correo electrónico -->
                    <div class="mb-4 ">
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico <span class="text-gray-700">*</span></label>
                        <input id="email" type="email" name="email" required autofocus autocomplete="username"
                            class="w-full p-2 border border-gray-300 rounded-md mt-1 bg-stone-100" :value="old('email')" placeholder="Correo electrónico">
                        @error('email')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Contraseña -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña <span class="text-gray-700">*</span></label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="w-full p-2 border border-gray-300 rounded-md mt-1 bg-stone-100" placeholder="Contraseña">
                        @error('password')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                     <!-- Olvidó su contraseña -->
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                    <!-- Botón de inicio de sesión -->
                    <div>
                        <button type="submit" class="w-full bg-black text-white p-2 rounded-md mt-4">Iniciar sesión</button>
                    </div>
                    <!-- Iniciar sesión con Google -->
                    <div class="mt-4 text-center">
                        <button type="button" class="w-full bg-cyan-600 text-white p-2 rounded-md flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="Google" class="w-5 h-5 mr-2">
                            Inicia sesión como Melanie Alejandra
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
               
               


