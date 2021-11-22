<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo','Laravel')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="text-white" style="background: #020202;">

  <center>
    <header>
     <h1 class="display-3 p-3 mb-2 bg-dark text-white"> Prueba Laravel </h1> 
   </header>
   <h2 class="text-danger"> CRUD BD prueba_laravel</h2> 
   <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
      <a class="nav-link " href="{{ route('listaEstudiantes') }}">Estudiantes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('listaGrupos') }}">Grupos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('listarTurnos') }}">Turnos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('listaSemestre') }}">Semestres</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('listaGruposEstudiantes') }}">Grupos Estudiantes</a>
    </li>
    
  </ul>
  <br>
  
  <!--------------------CONTENIDO------------------------------------------------------------------>




  @yield('content')



  <!--------------------CONTENIDO------------------------------------------------------------------>

</center>


<div class="container ">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; <mark>Warriors Lab's S.A de C.V </mark>  <br><br><img src="{{asset('img/logo.png')}}" align="center" width="15%" height="30%"></p>

  </footer>
</div>
</body>
</html>