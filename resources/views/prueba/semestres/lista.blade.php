@extends('layouts.plantilla')
@section('titulo', 'Lista Semestres')
@section('content')
    <h2 class="text-success"> Lista de Semestres</h2> <br> <br>
    <div class="container">
        <a href="{{ route('agregarSemestre') }}" class="btn btn-success btn-sm">Agregar Semestre</a>
        <table class="table table-bordered">
            <thead class="table-light text-danger" >
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Semestres</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semestres as $semestre)
                    <tr>
                        <td>{{ $semestre->id }}</td>
                        <td>{{ $semestre->grado }}</td>
                        <td> 
                            <a href="{{ route('editarSemestre',$semestre->id) }}"  class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('eliminarSemestre', $semestre->id) }}" method="POST">
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger btn-sm"> <br>
                            </form>

                        </td>
                    </tr>

                @endforeach    
            </tbody>
        </table>

  </div>

@endsection