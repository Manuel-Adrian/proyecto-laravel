<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarGrupoRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Grupos;
use App\Semestres;
use App\Turnos;

class GrupoController extends Controller
{
    public function listaGrupos()
    {
        $grupos=Grupos::select('id', 'clave', 'turnos_id','semestres_id')->orderBY('id', 'ASC')->get();
        
        /*$grupos = DB::table('grupos')
            ->join('turnos', 'turnos.id', '=' , 'grupos.turnos_id')
            ->join('semestres', 'semestres.id', '=' , 'grupos.semestres_id')
            ->select('grupos.id', 'grupos.clave',' semestres.grado', 'turnos.horario')
            ->orderBY('grupos.id','DESC')->get();*/
            //dd($grupos);

        return view('prueba.grupos.lista', compact('grupos'));
    }


    public function agregarGrupo()
    {
        $turnos=Turnos::select('id','horario')->orderBY('id', 'ASC')->get();
        $semestres=Semestres::select('id','grado')->orderBY('id', 'ASC')->get();

        return view ('prueba.grupos.agregar',compact('turnos','semestres'));

    }


    public function insertarGrupo(Request $request)
    {
         $request->validate([
            'clave'=> 'required|regex:/^[A-Za-z]-([0-9]{3})/',
            'turnos_id'=> 'required|regex:/^[0-9]+/',
            'semestres_id'=>'required|regex:/^[0-9]+/'
        ]);

        $grupos= new Grupos;
        $grupos->clave=mb_strtoupper($request->clave);
        $grupos->turnos_id=$request->turnos_id;
        $grupos->semestres_id=$request->semestres_id;
        $grupos->save();

        return redirect()->route('listaGrupos');
    }
   
    
    public function editarGrupo($grupos_id)
    {
        $grupo=Grupos::find($grupos_id);
        $turnos=Turnos::select('id','horario')->orderBY('id', 'ASC')->get();
        $semestres=Semestres::select('id','grado')->orderBY('id', 'ASC')->get();

        return view('prueba.grupos.editar', compact('grupo','turnos','semestres'));
    }

    
    public function actualizarGrupo(ActualizarGrupoRequest $request, $grupos_id)
    {
         /*$request->validate([
            'clave'=> 'required|regex:/^[A-Za-z]-([0-9]{3})/',
            'turnos_id'=> 'required|regex:/^[1-9]+/',
            'semestres_id'=>'required|regex:/^[1-9]+/'
        ]);*/

         $grupo=Grupos::find($grupos_id);
         $grupo->clave=mb_strtoupper($request->clave);
         $grupo->turnos_id=$request->turnos_id;
         $grupo->semestres_id=$request->semestres_id;
         $grupo->save();

        return redirect()->route('listaGrupos');
    }

    public function eliminarGrupo($grupos_id)
    {
        $grupo=Grupos::find($grupos_id)->delete();

        return redirect()->route('listaGrupos');
    }
    
}
