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

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased">

        <div class="bg-gray-200 text-black/65">
            <div class="w-full">
                <header>

                    @if (Route::has('login'))
                        <nav class="px-8 flex items-center justify-between py-2 bg-dark_black"
                        x-data="data()" x-init="start()">
                            <div class="flex flex-row md:w-fit items-center justify-between">
                                <a href="{{ route('/') }}"
                                    class="flex flex-col text-center text-white py-1">
                                    <span class="text-3xl leading-none font-bold">CEDITEC</span>
                                    <span class="text-[10px] leading-none font-normal">Centro de
                                        Documentación<br>e Información</span>
                                </a>
                                
                            </div>

                            {{-- MENU DESKTOP  --}}
                            <div 
                                class="hidden md:block">
                                <ul class="flex flex-row gap-[2vw]">
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
                                            Nosotros
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
                                                Inicia sesión
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('administrador') }}" class="nav-link">
                                                Administración
                                            </a>
                                        </li>
                                    @endauth

                                </ul>
                            </div>

                            {{-- MENU MOBILE --}}

                            <span class="text-3xl md:hidden cursor-pointer" @click="isOpen()">
                                <i class="fa-solid fa-bars text-white"  ></i>
                            </span>

                            <div class="absolute top-[74px] left-0 bg-dark_black w-full py-4 z-10 pl-9 md:hidden"
                            
                            :class="open ? '' : 'hidden'">
                                <ul class="flex flex-col gap-4">
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
                                            Nosotros
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
                                                Inicia sesión
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('administrador') }}" class="nav-link">
                                                Administración
                                            </a>
                                        </li>
                                       
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




        <script>
            function data(){
                return {
                    open : null,
                    start(){
                        this.open = false;
                    },
                    isOpen(){
                        this.open = !this.open;
                    },
                    
                }
            }
            
        </script>

    </body>

</html>
