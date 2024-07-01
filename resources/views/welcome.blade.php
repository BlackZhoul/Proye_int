@extends('layouts.navbar')

@section('content')
<div class="w-full">
    <img src="{{ asset('images/FONDO.svg') }}" alt="#" class="w-full" loading="lazy">
</div>

<div class="flex justify-center">
    <div class="flex flex-col w-full sm:w-2/3 m-4 bg-black rounded-full">
        <form action="{{ url('/') }}" class="relative m-4">
            <input type="text" placeholder="Busca en nuestro catálogo en línea" class="w-full h-12 rounded-full px-4">
            <div class="absolute inset-y-0 right-0 flex items-center pr-5 pointer-events-none">
                <i class="fas fa-search fa-lg" style="color: #000000;"></i>
            </div>
        </form>
    </div>
</div>

<div class="flex flex-col sm:flex-row justify-evenly mt-8 mb-12">
    <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
        <span class="text-xl font-semibold text-dark_black">Reserva</span>
        <p class="py-6 text-justify">Reserva salas de estudio y computadoras.</p>
        <div class="flex justify-center">
            <button class="p-2 duration-200 border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold hover:bg-[#e7e7e7]">
                Solicitar reserva
            </button>
        </div>
    </div>

    <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
        <span class="text-xl font-semibold text-dark_black">Préstamos</span>
        <p class="py-6 text-justify">Préstamos de tablets y calculadoras.</p>
        <div class="flex justify-center">
            <button class="p-2 duration-200 border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold hover:bg-[#e7e7e7]">
                Solicitar préstamo
            </button>
        </div>
    </div>

    <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
        <span class="text-xl font-semibold text-dark_black">Base de datos</span>
        <p class="py-6 text-justify">Consulta libros electrónicos y bases de datos.</p>
        <div class="flex justify-center">
            <button href="{{ route('bd') }}" type="button" onclick="" class="p-2 duration-200 border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold hover:bg-[#e7e7e7]">
                Ver biblioteca
            </button>
        </div>
    </div>
</div>

<div class="w-full bg-white text-dark_black">
    <h2 class="py-4 pl-12 text-2xl font-semibold font-poppins">BÚSQUEDA POR DEPARTAMENTO</h2>
    <div class="w-full relative">
        <div class="swiper centered-slide-carousel swiper-container relative">
            <div class="swiper-wrapper flex items-center justify-center">
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Electricidad-y-Electronica.png') }}" alt="Electricidad y Electrónica" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Electricidad y Electrónica</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Gestion-y-Produccion.png') }}" alt="Gestión y Producción" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Gestión y Producción</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Mecanica-y-aviacion.png') }}" alt="Mecánica y Aviación" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Mecánica y Aviación</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Mecatronica.png') }}" alt="Mecatrónica" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Mecatrónica</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Mineria-Procesos-Quimicos.png') }}" alt="Minería, Procesos Químicos y Metalúrgicos" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Minería, Procesos Químicos y Metalúrgicos</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Seguridad-y-Salud.png') }}" alt="Seguridad y Salud" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Seguridad y Salud</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Tecnologia-Agricola.png') }}" alt="Tecnología Agrícola" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Tecnología Agrícola</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-2">
                    <a href="#" class="group block focus:outline-none">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/Tecnologia-Digital.png') }}" alt="Tecnología Digital" class="max-h-full" loading="lazy">
                            <span class="text-lg font-semibold text-dark_black mt-2">Tecnología Digital</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !-translate-x-16" data-carousel-prev>
                    <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16" data-carousel-next>
                    <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <h2 class="py-4 pl-12 text-2xl font-semibold font-poppins">NOTICIAS</h2>
    <div class="flex flex-wrap justify-evenly">
        <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
            <span class="text-xl font-semibold text-dark_black">Inauguración de nuevas sedes</span>
            <p class="py-6 text-justify">¡Estamos emocionados de anunciar la inauguración de nuestras nuevas sedes en todo el país! Leer más sobre este emocionante desarrollo.</p>
        </div>
        <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
            <span class="text-xl font-semibold text-dark_black">Evento de networking</span>
            <p class="py-6 text-justify">Únase a nosotros en nuestro próximo evento de networking para explorar nuevas oportunidades y expandir su red profesional.</p>
        </div>
        <div class="card flex flex-col items-center justify-center bg-white p-6 m-4">
            <span class="text-xl font-semibold text-dark_black">Lanzamiento de nuevos cursos</span>
            <p class="py-6 text-justify">Anunciamos el lanzamiento de varios nuevos cursos diseñados para satisfacer las demandas del mercado actual. ¡Descúbrelos hoy mismo!</p>
        </div>
    </div>
    <div class="flex items-center justify-center p-8">
        <button x-on:click="window.location.href='{{route('noticias')}}'" type="button"
            class="text-2xl font-semibold font-poppins active:bg-[#e7e7e7] duration-200 p-2 box-border border-4 border-dark_black">MÁS
            NOTICIAS &gt;</button>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        loopAdditionalSlides: 2,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endsection
