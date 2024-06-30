@extends('layouts.navbar')

@section('meta-csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="w-full sm:max-w-4xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg flex flex-col sm:flex-row">
        <div class="hidden sm:block w-full sm:w-1/3 flex items-center justify-center sm:justify-start">
            <img src="images/portada_c.png" alt="Image" class="object-cover w-full h-auto sm:h-full rounded-md">
        </div>

        <div class="w-full sm:w-2/3 px-6 py-4">
            <div class="flex justify-center mb-4">
                <img src="images/logo_ceditec.png" alt="Logo" class="h-32 rounded-lg">
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Correo Electrónico') }}</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-gray-200" placeholder="Ingresa tu correo electrónico">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Contraseña') }}</label>
                    <div class="flex items-center justify-between mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-gray-200" placeholder="Ingresa tu contraseña">
                    </div>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded bg-gray-200 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 focus:ring-offset-white"
                            name="remember">
                        <span class="ml-2 text-sm text-black">{{ __('Recordarme') }}</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">{{ __('¿Olvidaste tu contraseña?') }}</a>
                </div>

                <div class="flex flex-col mt-6 space-y-4">
                    <div class="text-center">
                        <button type="button" class="w-full bg-cyan-600 text-white p-2 rounded-md flex items-center justify-center">
                            Iniciar sesión
                        </button>
                    </div>
                    <button type="button" class="w-full flex items-center justify-center px-4 py-2 text-sm font-semibold leading-6 text-white bg-black rounded-md shadow-sm hover:bg-gray-900">
                        <img src="images/b_gmail.png" alt="Gmail" class="h-8 mr-2">
                        {{ __('Iniciar sesión con Gmail') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
