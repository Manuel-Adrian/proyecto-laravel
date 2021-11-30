@extends('layouts.plantilla')
@section('titulo','Lista Grupos')
@section('content')
    <h2 class="text-success"> GRUPOS</h2> <br> <br>
    <a href="{{ route('agregarGrupo') }}" class="btn btn-lg btn btn-outline-light btn-sm"> CREAR </a><br><br>
    <table class="table table-bordered">
        <thead class="table-success text-danger" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Grupo</th>
                <th scope="col">Semestre</th>
                <th scope="col">Turno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
            <tr>
                <td>{{ $grupo->id }}</td>
                <td>{{ $grupo->clave }}</td>
                <td>{{ $grupo->horario }}</td>
                <td>{{ $grupo->grado }}</td>
                <td> 
                    <form action="{{ route('eliminarGrupo',$grupo->id) }}" method="POST">
                          <a href="{{ route('editarGrupo',$grupo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                          @csrf
                          <input type="submit" value="Eliminar" class="btn btn-danger btn-sm"> <br>
                     </form>
                </td>
            </tr>
              @endforeach    
        </tbody>
    </table>
               
@endsection