<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\ActualizarSemestreRequest;
use Illuminate\Support\Str;
use App\Semestres;

class SemestreController extends Controller
{

    public function listaSemestres()
    {
        $semestres=Semestres::select('id','grado')->orderBY('id','ASC')->get();

        return view('prueba.semestres.lista', compact('semestres'));
    }


    public function agregarSemestre()
    {
        return view('prueba.semestres.agregar');
    }

    public function insertarSemestre(Request $request)
    {
        $request->validate([
            'grado'=>'required|unique:semestres|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,20}/'
        ]);

        $semestre= new Semestres;
        $semestre->grado=mb_strtoupper($request->grado);
        $semestre->save();

        return redirect()->route('listaSemestre');
    }

    public function editarSemestre($semestres_id)
    {
        $semestre=Semestres::find($semestres_id);

        return view('prueba.semestres.editar', compact('semestre'));

    }

    public function actualizarSemestre(ActualizarSemestreRequest $request, $semestres_id)
    {
    
        $semestre=Semestres::find($semestres_id);
        $semestre->grado=mb_strtoupper($request->grado);
        $semestre->save();

        return redirect()->route('listaSemestre');
    }

    public function eliminarSemestre($semestres_id)
    {
        $semestre=Semestres::find($semestres_id)->delete();

        return redirect()->route('listaSemestre');
    }

}
