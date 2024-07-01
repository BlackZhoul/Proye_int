@extends('layouts.navbar_footer_admin')
@section('content')
<div class="h-full flex flex-wrap justify-center items-center">

    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-5">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Libros</div>
          <p class="text-dark_black text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2 flex flex-row justify-center items-center">
            <a href="{{route('admin.gestion.libros')}}">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Administrar Registros</span>

            </a>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-5">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Tablets</div>
          <p class="text-dark_black text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2 flex flex-row justify-center items-center">
            <a href="{{route('admin.gestion.tablets')}}">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Administrar Registros</span>

            </a>
        </div>
      </div>


      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-5">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Calculadoras</div>
          <p class="text-dark_black text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2 flex flex-row justify-center items-center">
            <a href="{{route('admin.gestion.calculadoras')}}">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Administrar Registros</span>

            </a>
        </div>
      </div>



</div>
@endsection