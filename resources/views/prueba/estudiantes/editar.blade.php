@extends('layouts.plantilla')
@section('titulo', 'Editar Estudiante') 
@section('content')
    <h3 class="text-primary"> Editar Registros</h3> <br>
    <br> <br>
    <form action="{{ route('actualizarEstudiante',$estudiante->id) }}" method="POST">
        @csrf
        <div class="container-fluid"> 
            <div class="row" >
                <div class="col-sm-4">
                    <input type="text" class="form-control text-uppercase" placeholder="Nombre" id="nombre"name="nombre" 
                    value="{{ old('nombre',$estudiante->nombre )}}" title="Ingresa tu(s) nombres(s)" required 
                    pattern="[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+" minlength="3" maxlength="100">
                    <span id="errorNombre"></span>
                    @error('nombre')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                    @enderror
                </div>
            <div class="col-sm-4">
                <input type="text" class="form-control text-uppercase" placeholder="Apellido Paterno" id="apellido_paterno" 
                name="apellido_paterno" value="{{ old('apellido_paterno',$estudiante->apellido_paterno) }}" required minlength="2" maxlength="100" pattern="[A-Za-z,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+">
                <span id="errorPaterno"></span>
                @error('apellido_paterno')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control text-uppercase"  placeholder="Apellido Materno" id="apellido_materno" 
                name="apellido_materno" value="{{ old('apellido_materno', $estudiante->apellido_materno) }}" required minlength="2" maxlength="100" pattern="[A-Za-z,á,é,í,ó,ú,Á,É,Í,Ó,Ú,ñ ]+">
                <span id="errorMaterno"></span> 
                @error('apellido_materno')
                        <div class="alert alert-danger">
                           {{ $message }} <br>
                        </div>
                 @enderror
            </div>
        </div>
        <br> <br>
        <div class="row">
            <div class="col-sm-1">
                <input type="number" class="form-control" placeholder="Edad" id="edad" name="edad" 
                value="{{ old('edad',$estudiante->edad) }}" required min="17" max="120">
                <span id="errorEdad"></span>
                @error('edad')
                        <div class="alert alert-danger">
                         {{ $message }} <br>
                        </div>
                @enderror
            </div>
            <div class="col-sm-5">
                <input type="email" class="form-control text-lowercase" placeholder="Email" id="email" name="email" 
                value="{{ old('email',$estudiante->email) }}" required minlength="8" maxlength="150" 
                pattern="[A-Za-z_-0-9]+ @ [A-za-z._-0-9]+[.]$[A-za-z]{2,5}">
                <span id="errorEmail"></span>
                @error('email')
                        <div class="alert alert-danger">
                          {{ $message }} <br>
                        </div>
                @enderror
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Télefono" id="telefono" name="telefono" 
                value="{{ old('telefono',$estudiante->telefono) }}" required minlength="8" maxlength="20" 
                pattern="(\+)?[0-9]{8,15}">
                <span id="errorTelefono"></span>
                @error('telefono')
                        <div class="alert alert-danger">
                            {{ $message }} <br>
                        </div>
                @enderror
            </div>
        </div>
        <br> <br>
        <input type="submit" value="Guardar" class="btn btn-outline-danger btn-lg" id="btnEnviar"> 
        <a href="{{ route('listaEstudiantes') }}" class="btn btn-lg btn btn-outline-info">  Cancelar</a> <br> <br>
        <input type="reset" value="Restablcer" class="btn btn-outline-warning btn-lg">
    </form>
    <script src="{{ asset('js/validarVistaEstudiantes.js') }}"></script>
@endsection