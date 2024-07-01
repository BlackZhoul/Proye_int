@extends('layouts.navbar_footer_admin')
@section('content')

<div class="flex flex-col justify-center">
    
<h2 class="text-3xl font-black">Calculadoras</h2>
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
    	{{-- @foreach($calculadoras as $fila)
    	<tr>
        	<td>{{ $fila->codigo}}</td>
        	<td>{{ $fila->estado}}</td>
        	<td>{{ $fila->fecha_adquisicion}}</td>
        	<td>{{$fila->sede->nombre}}</td> --}}

        	<td class="text-center">
            	<a class="btn btn-secondary" href="/admin/materiales/calculadoras/edit/">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a class="btn btn-danger" href="/admin/materiales/calculadoras/delete/">
                	<i class="bi bi-trash"></i>
            	</a>
        	</td>
    	</tr>
    	{{-- @endforeach --}}
	</tbody>
</table>
</div>
@endsection

