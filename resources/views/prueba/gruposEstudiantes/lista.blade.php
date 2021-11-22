@extends('layouts.plantilla')
@section('titulo','Lista Grupos Estudiantes')
@section('content')
    <h2 class="text-success"> GRUPOS Estudiantes</h2> <br> <br>
    <a href="{{ route('agregarGrupoEstudiante') }}" class="btn btn-lg btn btn-outline-light btn-sm"> CREAR </a> <br><br>
    <table class="table table-bordered">
        <thead class="table-warning text-danger" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Grupo</th>
                <th scope="col">Estudiante</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupoEstudiantes as $grupoEstudiante)
                <tr>
                    <td>{{ $grupoEstudiante->id }}</td>
                    <td>{{ $grupoEstudiante->grupos->clave}}</td>
                    <td>{{ $grupoEstudiante->estudiantes->nombre}} {{ $grupoEstudiante->estudiantes->apellido_paterno}}
                    {{ $grupoEstudiante->estudiantes->apellido_materno}}</td>
                    <td> 
                    <form action="{{ route('eliminarGrupoEstudiante',$grupoEstudiante->id) }}" method="POST">
                        <a href="{{ route('editarGrupoEstudiante',$grupoEstudiante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        @csrf
                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm"> <br>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
                    </form>
@endsection