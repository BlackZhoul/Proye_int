


<div class="flex justify-center">
    <div class="flex flex-col w-2/3 m-4 bg-black rounded-full">
        <form action="{{ url('/') }}" class="relative m-4">
            <input type="text" placeholder="Busca en nuestro catálogo en línea" class="w-full h-12 rounded-full">
            <div class="absolute inset-y-0 right-0 flex items-center pb-1 pr-5 pointer-events-none"><i
                    class="fas fa-search fa-lg" style="color: #000000;"></i></div>
        </form>
    </div>
</div>


<div class="flex flex-col items-center mt-16 mb-12 lg:flex-row lg:justify-evenly">
    <div class="card">
        <span class="text-xl font-semibold text-dark_black">Reserva</span>
        <p class="py-6 text-justify px-9">Reserva salas de estudio y computadoras.</p>
        <div class="flex flex-row justify-center ">
            <button
                class=" p-2 active:bg-[#e7e7e7] duration-200 box-border border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold">Solicitar
                reserva</button>
        </div>
    </div>
    <div class="card">
        <span class="text-xl font-semibold text-dark_black">Préstamos</span>
        <p class="px-8 py-6 text-justify">Préstamos de tablets y calculadoras.</p>
        <div class="flex flex-row justify-center">
            <button
                class=" p-2 active:bg-[#e7e7e7] duration-200 box-border border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold">Solicitar
                préstamo</button>
        </div>

    </div>

    <div class="card">
        <span class="text-xl font-semibold text-dark_black">Base de datos</span>
        <p class="px-8 py-6 text-justify">Consulta libros electrónicos y bases de datos.</p>
        <div class="flex flex-row justify-center">
            <button type="button" onclick=""
                class=" p-2 active:bg-[#e7e7e7] duration-200 box-border border-2 text-[#2DB4D1] border-[#2DB4D1] font-poppins font-semibold">Ver
                biblioteca</button>

        </div>
    </div>
</div>
<div class="w-full bg-white text-dark_black">
    <div class="">
        <h2 class="py-4 pl-12 text-2xl font-semibold font-poppins">BÚSQUEDA POR DEPARTAMENTO</h2>
        <div class="flex flex-row justify-around">
            <div>
                <button class="text-8xl font-poppins">
                    < </button>
            </div>
            <div class="bg">
                <h3>
                    Tecnología Digital
                </h3>
            </div>
            <div>
                <h3>Mecánica y Aviación</h3>
            </div>
            <div>
                <h3>Minería, Procesos Químicos y Metalúrgicos</h3>
            </div>
            <div>
                <h3>
                    Mecatrónica
                </h3>
            </div>
            <div>
                <button class="text-8xl font-poppins">
                    >
                </button>
            </div>
        </div>
    </div>
    <div>

        <h2 class="py-4 pl-12 text-2xl font-semibold font-poppins">NOTICIAS</h2>

        <div class="flex justify-evenly">
            <div class="bg-black">
                k
            </div>
            <div class="bg-black">
                k
            </div>
            <div class="bg-black">
                k
            </div>
            <div class="bg-black">
                k
            </div>
        </div>
        <div class="flex items-center justify-center p-8">
            <button x-on:click="window.location.href='{{route('noticias')}}'" type="button"
                class="text-2xl font-semibold font-poppins
        active:bg-[#e7e7e7] duration-200 p-2 box-border border-4 border-dark_black
        ">MÁS
                NOTICIAS ></button>

        </div>
    </div>
</div>