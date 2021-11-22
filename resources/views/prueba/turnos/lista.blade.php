@extends('layouts.plantilla')
@section('titulo','Lista de Turnos')
@section('content')
	<h2 class="text-success">Lista de Turnos</h2>
	<br><br>
	<div class="container">
		<a href="{{ route('agregarTurno') }}" class="btn btn-success btn-sm">Agregar Turno</a>
		<br><br>
		<table class="table table-bordered">
		  	<thead class="table-primary  text-danger" >
		    	<tr>
		      		<th scope="col">Id</th>
		      		<th scope="col">Turno</th>
		      		<th scope="col">Acciones</th>
		    	</tr>
		  	</thead>
		  	<tbody>
		    	@foreach ($turnos as $turno)
		    		<tr>
		      			<td>{{ $turno->id }}</td>
		      			<td>{{ $turno->horario }}</td>
		      			<td> 
		      				<a href="{{ route('editarTurno',$turno->id) }}" class="btn btn-warning btn-sm">Editar</a>
		        			<form action="{{ route('eliminarTurno',$turno->id) }}" method="POST">
		        				@csrf
		        				<input type="submit" value="Eliminar" class="btn btn-danger btn-sm mt-3">
		        			</form>
		      			</td>
		    		</tr>
		    	@endforeach    
		  	</tbody>
		</table>
	</div>
@endsection