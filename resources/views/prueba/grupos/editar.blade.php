@extends('layouts.plantilla')
@section('titulo','Editar Grupo')
@section('content')
    <h2 class="text-success"> EDITANDO GRUPO</h2> <br> <br>
    <div class="container">
        <form class="form-inline" action="{{ route('actualizarGrupo', $grupo->id) }}" method="POST">
            @csrf
            <div>
                <label class="form-label">INGRESE UN NUEVO GRUPO</label>
                <input type="text" class="form-control text-uppercase" 
                    name="clave" value="{{ old('clave',$grupo->clave) }}" 
                    required pattern="[A-Za-z]-([0-9]{3})" 
                    id="clave" title="Ingresa la primera letra mayuscula, gúión y tres cifras (Ejemplo A-789)"
                ><br>
                 <span id="errorClave"></span>
                @error('clave')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
           </div> 
           <!--------------------------------------------------------------------------------------------------------------------------->
           <div class="form-control">
                <label class="form-label" >Turnos</label>
                <select class="form-control" name="turnos_id" required id="turnos_id">
                    <option value="" >Elige...</option>
                    @foreach ($turnos as $turno)
                        <option value="{{ $turno->id }}" @if ($turno->id == $grupo->turnos_id) selected @endif>{{ $turno->horario }}</option>
                    @endforeach
                </select>
                <span id="errorTurnosId"></span>
                @error('turnos_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>  
          <!--------------------------------------------------------------------------------------------------------------------------->
            <div class="form-control">
                <label class="form-label" >Semestres</label>
                <select class="form-control" name="semestres_id" required id="semestres_id">
                    <option value="">Elige...</option>
                    @foreach ($semestres as $semestre)
                        <option value="{{ $semestre->id }}" @if ($grupo->semestres_id == $semestre->id) selected @endif>{{ $semestre->grado }}</option>
                    @endforeach
                </select>
                 <span id="errorSemestresId"></span>
                @error('semestres_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>  
            <button type="submit" class="btn btn-success mb-2" id="btnEnviar">CONFIRMAR</button>
            <a href="{{ route('listaGrupos') }}" class="btn btn-light"> Cancelar</a>
        </form>
        <script src="{{ asset('js/validarVistaGrupos.js') }}"></script>
        <br> <br>
    </div>
@endsection