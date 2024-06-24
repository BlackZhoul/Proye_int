@section('content')
    <div class="flex flex-col items-center w-full min-h-screen">
        <div class="w-full">
            <img class="w-full" src="{{ asset('images/FONDO.svg') }}" alt="#">
        </div>
        <div class="relative w-9/12 my-4 border-8 border-black rounded-full">

            <form action="{{ url('/') }}" class="flex justify-center">
                <input type="text" placeholder="Busca en nuestro catálogo en línea"
                    class="w-full h-12 rounded-full">
                <div class="absolute inset-y-0 right-0 flex items-center mb-1 mr-5 pointer-events-none">
                    <i class="fas fa-search " style="color: #000000;"></i>
                </div>
            </form>
            <div>
                    
            </div>
        </div>
    </div>
@endsection
