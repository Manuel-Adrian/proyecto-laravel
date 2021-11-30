@extends('layouts.plantilla')
@section('titulo', 'Detalles del Estudiante') 
@section('content')
    <h3 class="text-primary"> Detalles del Estudiante</h3> <br>
    <br> <br>
    <div class="container-fluid"> 
        <div class="row" >
            <div class="col-sm-4">
                <label  class="form-label">Nombre</label>
                <input type="text" class="form-control" 
                    placeholder="Nombre" id="nombre"
                    name="nombre" value="{{ $estudiante->nombre }}" 
                    required disabled
                >
            </div>
            <div class="col-sm-4">
                <label for="exampleDataList" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" 
                    placeholder="Apellido Paterno" id="apellido_paterno" 
                    name="apellido_paterno" value="{{ $estudiante->apellido_paterno }}" 
                    required disabled
                >
            </div>
            <div class="col-sm-4">
                <label class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" 
                    placeholder="Apellido Materno" id="apellido_materno" 
                    name="apellido_materno" value="{{ $estudiante->apellido_materno }}" 
                    required disabled
                >
            </div>
        </div>
        <br> <br>

        <div class="row">
            <div class="col-sm-1">
                <label  class="form-label">Edad</label>
                <input type="numeric" class="form-control" 
                    placeholder="Edad" id="edad" 
                    name="edad" value="{{ $estudiante->edad }}" 
                    required disabled
                >
            </div>
            <div class="col-sm-5">
                <label  class="form-label">Email</label>
                <input type="email" class="form-control" 
                    placeholder="Email" id="email" 
                    name="email" value="{{ $estudiante->email }}" 
                    required disabled
                >
            </div>
            <div class="col-sm-4">
                <label  class="form-label">Teléfono</label>
                <input type="text" class="form-control" 
                    placeholder="Télefono" id="telefono" 
                    name="telefono" value="{{ $estudiante->telefono }}" 
                    required disabled
                >
            </div>
        </div>
    </div>
    <br> <br>
    <a href="{{ route('listaEstudiantes') }}" class="btn btn-lg btn btn-outline-info"> Regresar</a> <br> <br>
@endsection