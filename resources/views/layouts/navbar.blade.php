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

<body class="w-full h-screen font-sans antialiased">

    <div class="bg-[#e8e8e8] text-black/65">
        <div class="w-full">
            <header>

                @if (Route::has('login'))
                    <nav class="px-[2%] flex items-center justify-between py-2 bg-dark_black">
                        <div class="">
                            <a href="{{ route('/') }}"
                                class="flex flex-col items-center text-center text-white">
                                <span class="text-2xl font-bold md:text-4xl">CEDITEC</span>
                                <span class="text-[12px] leading-none">Centro de Documentación<br>e Información</span>
                            </a>
                        </div>

                        <div class="md:static md:w-auto md:min-h-fit absolute top-0 left-0 bg-dark_black min-h-[60vh] w-full flex items-center px-[2%]">
                            <ul class="flex md:flex-row flex-col md:items-center md:gap-[2vw] gap-8">
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
                        </div>
                    </nav>
                @endif

                @yield('repositorio_banner')

            </header>


            <main>

                @yield('content')

            </main>


            <footer class="w-full py-16 text-center text-white bg-dark_black">
                <span> &copy; {{ date('Y') }} Tecsup All rights reserved</span>
            </footer>
        </div>
    </div>


</body>

</html>
