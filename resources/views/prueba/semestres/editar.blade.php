@extends('layouts.plantilla')
@section('titulo', 'Lista Semestres')
@section('content')
    <div class="container">
        <form class="form-inline" action="{{ route('actualizarSemestre',$semestre->id) }}" method="POST">
            @csrf
            <div class="form-group mx-sm-4 mb-2">
                <label  class="form-label" style="font-size: 25px;">INGRESE UN SEMESTRE</label>
            </div>
            <div class="form-group mx-sm-4 mb-2">
                <input type="text" class="form-control text-uppercase" style="font-size: 20px;" placeholder="Nuevo Semestre" 
                name="grado" id="grado" 
                value="{{ old('grado',$semestre->grado) }}" required pattern="[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú  ]{3,20}"><br><br>
                <span id=errorGrado></span><br>
                <span id=errorGrado1></span>
                @error('grado')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                    @enderror
            </div>
            <button type="submit" class="btn btn-success mb-2" id="btnEnviar">CONFIRMAR</button>
            <a href="{{ route('listaSemestre') }}" class="btn btn-light mb-2">CANCELAR</a>
        </form>
        <script src="{{ asset('js/validarVistaSemestres.js') }}"></script>
    </div>
@endsection