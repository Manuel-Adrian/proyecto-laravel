<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarEstudianteRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiantes;

class EstudianteController extends Controller
{
   
   public function listaEstudiantes()
   {

       $estudiantes=Estudiantes::select('id', 'nombre','apellido_paterno','apellido_materno', 'edad', 'email','telefono')
       ->orderBY('id', 'ASC')->get();

       return view('prueba.estudiantes.lista', compact('estudiantes'));
   }

   public function agregarEstudiante()
   {

      return view('prueba.estudiantes.agregar');
   }

   public function insertarEstudiante(Request $request)
   {
       $request->validate([
            'nombre'=>'required|min:3|max:100|regex:/^[A-Za-z,Ñ,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/', 
             'apellido_paterno'=>'required|min:3|max:100|regex:/^[A-Za-z,Ñ,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/',
             'apellido_materno'=>'required|min:3|max:100|regex:/^[A-Za-z,Ñ,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/', 
             'edad'=>'required|regex:/^[0-9]{2,3}/',
             'email'=>'required|email|unique:estudiantes|regex:/^[a-z0-9-._]+[@][a-z0-9-._]+\.[a-z]{2,5}/',
             'telefono'=>'required|regex:/^[+]?[0-9]{8,15}/'
        ]);

      $estudiante= new Estudiantes;
      $estudiante->nombre = mb_strtoupper($request->nombre);
      $estudiante->apellido_paterno = mb_strtoupper($request->apellido_paterno);
      $estudiante->apellido_materno = mb_strtoupper($request->apellido_materno);
      $estudiante->edad= $request->edad;
      $estudiante->email = mb_strtolower($request->email);
      $estudiante->telefono = $request->telefono;
      $estudiante->save();

      return redirect()->route('listaEstudiantes');
   }

   public function editarEstudiante($estudiantes_id)
   {

       $estudiante=Estudiantes::find($estudiantes_id);

       return view('prueba.estudiantes.editar', compact('estudiante'));
   }

   public function verEstudiante($estudiantes_id)
   {

       $estudiante=Estudiantes::find($estudiantes_id);

       return view('prueba.estudiantes.ver', compact('estudiante'));
   }

   public function actualizarEstudiante(ActualizarEstudianteRequest $request, $estudiantes_id)
   {
//https://www.regexpal.com/

       /*$request->validate([
            'nombre'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/', 
             'apellido_paterno'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/',
             'apellido_materno'=>'required|min:3|max:100|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]+/', 
             'edad'=>'required|regex:/^[0-9]{2,3}/',
             'email'=>'required|email|'.Rule::unique('estudiantes')->ignore($this->route('estudiantes_id')) .'|regex:/^[a-z0-9-._]+[@][a-z0-9-._]+\.[a-z]{2,5}/',
             'telefono'=>'required|regex:/^[+]?[0-9]{8,15}/'
        ]);*/


        $estudiante=Estudiantes::find($estudiantes_id);
        $estudiante->nombre=mb_strtoupper($request->nombre);
        $estudiante->apellido_paterno = mb_strtoupper($request->apellido_paterno);
        $estudiante->apellido_materno = mb_strtoupper($request->apellido_materno);
        $estudiante->edad= $request->edad;
        $estudiante->email = mb_strtolower($request->email);
        $estudiante->telefono = $request->telefono;
        $estudiante->save();

       return redirect()->route('listaEstudiantes');
   }

   public function eliminarEstudiante($estudiantes_id)
   {

       $estudiante=Estudiantes::find($estudiantes_id)->delete();

       return redirect()->route('listaEstudiantes');
   }
}
