@extends('layouts.plantilla')
@section('titulo','Edutar Alumno a Grupo')
@section('content')
    <h2 class="text-success"> EDITANDO ALUMNO A GRUPO</h2> <br> <br>
    <div class="container">
        <form class="form-inline" action="{{ route('actualizarGrupoEstudiante',$grupoEstudiante->id) }}" method="POST">
            @csrf
            <!--------------------------------------------------------------------------------------------------------------------->
            <div class="form-control">
                <label class="form-label" >Grupos</label>
                <select class="form-select" name="grupos_id" required>
                    <option >Elige...</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{ $grupo->id }}" @if ($grupoEstudiante->grupos_id == $grupo->id)selected @endif>{{ $grupo->clave }} </option>
                   @endforeach
                </select>
                @error('grupos_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror     
            </div>  
            <!---------------------------------------------------------------------------------------------------------------------->
            <div class="form-control">
                <label class="form-label" >Estudiantes</label>  
                <select class="form-select" name="estudiantes_id" required>
                    <option selected>Elige...</option>
                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}" @if ($grupoEstudiante->estudiantes_id == $estudiante->id)selected @endif>
                            {{ $estudiante->apellido_paterno }} {{ $estudiante->apellido_materno }} {{ $estudiante->nombre }}</option>
                    @endforeach
                </select>
                @error('estudiantes_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>  
            <button type="submit" class="btn btn-success mb-2">CONFIRMAR</button>
            <a href="{{ route('listaGruposEstudiantes') }}" class="btn btn-light"> Cancelar</a>
        </form>
        <script src="{{ asset('js/validarVistaGruposEstudiantes.js') }}"></script>
        <br> <br>
    </div>
@endsection