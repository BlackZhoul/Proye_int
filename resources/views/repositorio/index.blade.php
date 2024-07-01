@extends('layouts.navbar')
@section('repositorio_banner')
    <div class="flex items-center justify-center sm:flex-row py-10 bg-[#2DB4D1] ">
        <h1 class="text-3xl font-black md:text-7xl ">
            <span class="text-dark_black">REPOSITORIO</span><span class="text-white md:ml-14">INSTITUCIONAL</span>
        </h1>
    </div>
    <div class="items-center">
        <img src="{{ asset('images/hogar.png') }}" alt="Ícono" style="width: 14px; margin-left: 100px; margin-right: 40px;">
        <p style="margin-left: 120px;">Repositorio Institucional de Tecsup</p>
    </div>
@endsection
@section('content')
<div class="flex justify-between">
    <div class="w-1/2 bg-blue-200 p-4">Div a la izquierda</div>
    <div class="w-1/2 bg-green-200 p-4">Div a la derecha</div>
</div>

@endsection
