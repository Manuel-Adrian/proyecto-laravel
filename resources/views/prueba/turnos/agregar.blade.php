@extends('layouts.plantilla')
@section('titulo','Agregar Turno')
@section('content')
	<h2 class="text-success">Agregar Turno</h2>
	<br><br>
	<div class="container">
		<form class="form-inline" action="{{ route('insertarTurno') }}" method="POST">
    		@csrf
    		<div class="form-group mx-sm-4 mb-2">
     			<label class="form-label" style="font-size: 25px;">INGRESE UN TURNO</label>
   			</div>
   			<div class="form-group mx-sm-4 mb-2">
    			<input type="text" class="form-control text-uppercase" style="font-size: 20px;" name="horario" 
    			required pattern="[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú  ]+" id="horario" value="{{ old('horario') }}">
    			<span id="errorHorario"></span>
    			@error('horario')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
  			</div>
  			<button type="submit" class="btn btn-success mb-2" id="btnEnviar">CONFIRMAR</button>
  			<a href="{{ route('listarTurnos') }}" class="btn btn-light mb-2"> CANCELAR</a>
		</form>
		<script src="{{ asset('js/validarVistaTurnos.js') }}"></script>
	</div>
@endsection