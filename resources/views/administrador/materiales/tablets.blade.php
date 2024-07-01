@extends('layouts.navbar_footer_admin')
@section('content')

<div class="flex flex-col justify-center">
    
<h2 class="text-3xl font-black">Tablet</h2>
<table class="table">
	<thead>
    	<tr>
        	<th>Codigo</th>
        	<th>Estado</th>
        	<th>Fecha Adquisicion</th>
        	<th>Sede</th>
            
        	<th class="text-center">Acciones</th>
    	</tr>
	</thead>
	<tbody>
		@foreach($tablets as $item)
    	<tr>
        	<td>{{ $item->codigo}}</td>
        	<td>{{ $item->estado}}</td>
        	<td>{{ $item->fecha_adquisicion}}</td>
        	<td>{{$item->sede->nombre}}</td>

        	<td class="text-center">
				<a href="{{ route('admin.detalle.tablet', $item->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
					Ver detalle
				</a>
				
				<a href="{{ route('admin.editar.tablet', $item->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
					Editar
				</a>
				
				<a href="{{ route('admin.eliminar.tablet', $item->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
					Eliminar
				</a>
        	</td>
    	</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection

