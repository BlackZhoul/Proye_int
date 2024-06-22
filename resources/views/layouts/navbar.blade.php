<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta-csrf')


    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://kit.fontawesome.com/cbc0bd9080.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased w-full">

    <div class="bg-[#e8e8e8] text-black/65">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="relative w-full">
                <header>

                    @if (Route::has('login'))
                        <nav class=" pl-7 py-2 pr-10 bg-dark_black md:flex md:items-center md:justify-between ">
                            <div>
                                <a href="{{ route('/') }}"
                                    class="rounded-md text-white flex flex-col items-center text-center ">
                                    <span class="font-bold text-4xl">CEDITEC</span>
                                    <span class="text-xs leading-">Centro de Documentación</span>
                                    <span class="text-xs leading-none">e Información</span>
                                </a>
                            </div>

                            <ul class="md:flex md:items-center text-lg">
                                <li>
                                    <a href="{{ route('/') }}" class="nav-link">
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('repositorio') }}" class="nav-link">
                                        Repositorio
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('catalogo') }}" class="nav-link">
                                        Catálogo
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('acerca') }}" class="nav-link">
                                        Acerca de
                                    </a>
                                </li>

                                @auth
                                    <li>
                                        <a href="{{ route('acerca') }}" class="nav-link">
                                            Perfil
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="nav-link">
                                            Iniciar sesión
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="nav-link">
                                                Registrarse
                                            </a>
                                        </li>
                                    @endif
                                @endauth

                            </ul>
                        </nav>
                    @endif
                    
                    @yield('repositorio_banner')

                </header>


                <main>

                    @yield('content')

                </main>


                <footer class="py-16 text-center text-base text-white dark:text-white/70 bg-dark_black">
                    <span> &copy; {{ date('Y') }} Tecsup All rights reserved</span>
                </footer>
            </div>
        </div>
    </div>


</body>

</html>
