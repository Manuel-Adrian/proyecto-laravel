@extends('layouts.plantilla')
@section('titulo', 'Agregar Grupo Estudiante')
@section('content')
    <h2 class="text-success"> ASIGNAR ALUMNO A GRUPO</h2> <br> <br>
    <div class="container">
        <form class="form-inline" action="{{ route('insertarGrupoEstudiante') }}" method="POST">
            @csrf
        <!--------------------------------------------------------------------------------------------------------------------------->
            <div class="form-control">
                <label class="form-label" >Grupos</label>
                <select class="form-select" name="grupos_id" required id="grupos_id">
                    <option value="">Elige...</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{ $grupo->id }}"> {{ $grupo->clave}} </option>
                    @endforeach
                </select>
                <br><span id="errorGruposId"></span>
                @error('grupos_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>
        <!--------------------------------------------------------------------------------------------------------------------------->
            <div class="form-control">
                  <label class="form-label" >Estudiantes</label>
                  <select class="form-select" name="estudiantes_id" required id="estudiantes_id">
                        <option value="">Elige...</option>
                        @foreach ($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">{{ $estudiante->apellido_paterno }} {{ $estudiante->apellido_materno }} {{ $estudiante->nombre }}</option>
                        @endforeach
                    </select>
                    <br><span id="errorEstudiantesId"></span>
                    @error('estudiantes_id')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>  
            <button type="submit" class="btn btn-success mb-2" id="btnEnviar">CONFIRMAR</button>
            <a href="{{ route('listaGruposEstudiantes') }}" class="btn btn-light"> Cancelar</a>
        </form>
        <script src="{{ asset('js/validarVistaGruposEstudiantes.js') }}"></script>
        <br> <br>
    </div>
@endsection