@extends('layouts.plantilla')
@section('titulo', 'Lista de Estudiantes') 
<!------------------------------------------------------------------------------------------------------>
@section('content')
    <h2 class="text-success"> Estudiantes</h2> <br> 
    <a href="{{ route('agregarEstudiante') }}" class="btn btn-lg btn btn-outline-light btn-sm"> CREAR </a><br><br>
    <table class="table ">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Edad</th>
              <th scope="col">Email</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido_paterno }}</td>
                    <td>{{ $estudiante->apellido_materno }}</td>
                    <td>{{ $estudiante->edad }}</td>
                    <td>{{ $estudiante->email }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td>
                       
                    <form action="{{ route('eliminarEstudiante',$estudiante->id) }}" method="POST">
                        <a href="{{ route('editarEstudiante',$estudiante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        @csrf
                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm"> <br>
                    </form> 
                        <center>
                            <a href="{{ route('verEstudiante',$estudiante->id) }}" class="btn btn-info btn-sm">Ver</a>
                        </center>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
<!------------------------------------------------------------------------------------------------------>
@endsection


