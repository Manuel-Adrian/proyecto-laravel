<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\GruposEstudiantes;
use App\Estudiantes;
use App\Grupos;

class GrupoEstudianteController extends Controller
{
    public function listaGruposEstudiantes()
    {
        //$grupoEstudiantes=GruposEstudiantes::select('id','grupos_id','estudiantes_id')->orderBY('id','ASC')->get();
        $grupoEstudiantes = DB::table('grupos_estudiantes')
            ->join('estudiantes', 'estudiantes.id', '=', 'grupos_estudiantes.estudiantes_id')
            ->join('grupos', 'grupos.id', '=', 'grupos_estudiantes.grupos_id')
            ->select('grupos_estudiantes.id', 'estudiantes.nombre', 'estudiantes.apellido_paterno',
                'estudiantes.apellido_materno', 'grupos.clave')->orderBY('grupos_estudiantes.id', 'DESC')->get();
             //dd($grupoEstudiantes);
        
        return view('prueba.gruposEstudiantes.lista',compact('grupoEstudiantes'));
    }

    public function agregarGrupoEstudiante()
    {
        $grupos=Grupos::select('id', 'clave', 'turnos_id','semestres_id')->orderBY('id', 'ASC')->get();
        $estudiantes=Estudiantes::select('id', 'nombre','apellido_paterno','apellido_materno', 'edad', 'email','telefono')
        ->orderBY('id', 'ASC')->get();

        return view('prueba.gruposEstudiantes.agregar', compact('grupos','estudiantes'));
    }

    public function insertarGrupoEstudiante(Request $request)
    {
        $request->validate([
        'grupos_id'=>'required|regex:/^[0-9]+/',
        'estudiantes_id'=>'required|regex:/^[0-9]+/'

        ]);

        $grupoEstudiante= new GruposEstudiantes;
        $grupoEstudiante->grupos_id=$request->grupos_id;
        $grupoEstudiante->estudiantes_id=$request->estudiantes_id;
        $grupoEstudiante->save();
        
        return redirect()->route('listaGruposEstudiantes');
    }
    
    public function editarGrupoEstudiante($gruposEstudiantes_id)
   {
        $grupoEstudiante= GruposEstudiantes::find($gruposEstudiantes_id);
        $grupos=Grupos::select('id', 'clave', 'turnos_id','semestres_id')->orderBY('id', 'ASC')->get();
        $estudiantes=Estudiantes::select('id', 'nombre','apellido_paterno','apellido_materno', 'edad', 'email','telefono')
        ->orderBY('id', 'ASC')->get();

         return view("prueba.gruposEstudiantes.editar",compact("grupoEstudiante","grupos","estudiantes"));

   }

   
    public function actualizarGrupoEstudiante(Request $request, $gruposEstudiantes_id)
    {
        $request->validate([
        'grupos_id'=>'required|regex:/^[0-9]+/',
        'estudiantes_id'=>'required|regex:/^[0-9]+/'

        ]);
        
        $grupoEstudiante= GruposEstudiantes::find($gruposEstudiantes_id);
        $grupoEstudiante->grupos_id=$request->grupos_id;
        $grupoEstudiante->estudiantes_id=$request->estudiantes_id;
        $grupoEstudiante->save();
        
        return redirect()->route('listaGruposEstudiantes');

    }

    public function eliminarGrupoEstudiante($gruposEstudiantes_id)
    {
        $grupoEstudiante=GruposEstudiantes::find($gruposEstudiantes_id)->delete();

         return redirect()->route('listaGruposEstudiantes');

    }
}
