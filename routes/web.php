<?php
use App\Http\Controllers\EstudianteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Route::get('/', function () {
 #   return view('crud.index');
#});

#Route::get('/create', function () {
 #   return view('crud.create');
#}); --------->

Route::get('/', 'EstudianteController@listaEstudiantes');
/////////////////////////// RUTAS DE ESTUDIANTES //////////////////////////////////////////
Route::get('/lista-estudiantes' , 'EstudianteController@listaEstudiantes')->name('listaEstudiantes');
Route::get('/agregar-estudiante', 'EstudianteController@agregarEstudiante')->name('agregarEstudiante');
Route::post('/insertar-estudiante', 'EstudianteController@insertarEstudiante')->name('insertarEstudiante');
Route::get('/ver-estudiante/{estudiantes_id}', 'EstudianteController@verEstudiante')->name('verEstudiante');
Route::get('/editar-estudiante/{estudiantes_id}', 'EstudianteController@editarEstudiante')->name('editarEstudiante');
Route::post('/actualizar-estudiante/{estudiantes_id}', 'EstudianteController@actualizarEstudiante')->name('actualizarEstudiante');
Route::post('/eliminar-estudiante/{estudiantes_id}', 'EstudianteController@eliminarEstudiante')->name('eliminarEstudiante');

/////////////////////////// RUTAS DE GRUPOS //////////////////////////////////////////
Route::get('/lista-grupos' , 'GrupoController@listaGrupos')->name('listaGrupos');
Route::get('/agregar-grupo', 'GrupoController@agregarGrupo')->name('agregarGrupo');
Route::post('/insertar-grupo', 'GrupoController@insertarGrupo')->name('insertarGrupo');
Route::get('/editar-grupo/{grupos_id}', 'GrupoController@editarGrupo')->name('editarGrupo');
Route::post('/actualizar-grupo/{grupos_id}', 'GrupoController@actualizarGrupo')->name('actualizarGrupo');
Route::post('/eliminar-grupo/{grupos_id}', 'GrupoController@eliminarGrupo')->name('eliminarGrupo');

/////////////////////////// RUTAS DE GRUPOS ESTUDIANTES //////////////////////////////////////////
Route::get('/lista-grupos-estudiantes' , 'GrupoEstudianteController@listaGruposEstudiantes')->name('listaGruposEstudiantes');
Route::get('/agregar-grupo-estudiante', 'GrupoEstudianteController@agregarGrupoEstudiante')->name('agregarGrupoEstudiante');
Route::post('/insertar-grupo-estudiante', 'GrupoEstudianteController@insertarGrupoEstudiante')->name('insertarGrupoEstudiante');
Route::get('/editar-grupo-estudiante/{grupos_estudiantes_id}', 'GrupoEstudianteController@editarGrupoEstudiante')->name('editarGrupoEstudiante');
Route::post('/actualizar-grupo-estudiante/{grupos_estudiantes_id}', 'GrupoEstudianteController@actualizarGrupoEstudiante')->name('actualizarGrupoEstudiante');
Route::post('/eliminar-grupo-estudiante/{grupos_estudiantes_id}', 'GrupoEstudianteController@eliminarGrupoEstudiante')->name('eliminarGrupoEstudiante');

/////////////////////////// RUTAS DE TURNOS //////////////////////////////////////////
Route::get('/lista-turnos', 'TurnoController@listarTurnos')->name('listarTurnos');
Route::get('/agregar-turno',   'TurnoController@agregarTurno')->name('agregarTurno');
Route::post('/insertar-turno' , 'TurnoController@insertarTurno')->name('insertarTurno');
Route::get('/editar-turno/{turnos_id}' , 'TurnoController@editarTurno')->name('editarTurno');
Route::post('/actualizar-turno/{turnos_id}' , 'TurnoController@actualizarTurno')->name('actualizarTurno');
Route::post('/eliminarTurno/{turnos_id}' , 'TurnoController@eliminarTurno')->name('eliminarTurno');
/////////////////////////// RUTAS DE SEMESTRES //////////////////////////////////////////

Route::get('/lista-semestres','SemestreController@listaSemestres')->name('listaSemestre');
Route::get('/agregar-semestre' , 'SemestreController@agregarSemestre')->name('agregarSemestre');
Route::post('/insertar-semestre' , 'SemestreController@insertarSemestre')->name('insertarSemestre');
Route::get('/editar-semestre/{semestres_id}' , 'SemestreController@editarSemestre')->name('editarSemestre');
Route::post('/actualizar-semestre/{semestres_id}' , 'SemestreController@actualizarSemestre')->name('actualizarSemestre');
Route::post('eliminar-semestre/{semestress_id}' , 'SemestreController@eliminarSemestre')->name('eliminarSemestre');






////////////////////****************************************************/////////////////////////////////////////
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/hola', function(){
    return 'Hola a tdos';
});
Route::get('/usuarios', function(){
    return 'Usuarios';
});
Route::get('plantilla', function(){
    return view ('plantilla');
});

?>