<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarTurnoRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Turnos;

class TurnoController extends Controller
{
    public function listarTurnos()
    {
        $turnos=Turnos::select('id','horario')->orderBY('id','ASC')->get();

        return view('prueba.turnos.lista',compact('turnos'));
    }

    public function agregarTurno()
    {
        return view('prueba.turnos.agregar');
    }

    public function insertarTurno(Request $request)
    {
        $request->validate([
            'horario'=>'required|unique:turnos|regex:/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,20}/'
        ]);

        $turno= new Turnos;
        $turno->horario=mb_strtoupper($request->horario);
        $turno->save();

        return redirect()->route('listarTurnos');
    }
    
    public function editarTurno($turnos_id)
    {
        $turno=Turnos::find($turnos_id);

        return view('prueba.turnos.editar', compact('turno'));
    }

    public function actualizarTurno(ActualizarTurnoRequest $request, $turnos_id )
    {   
        
        $turno=Turnos::find($turnos_id);
        $turno->horario=mb_strtoupper($request->horario);
        $turno->save();

        return redirect()->route('listarTurnos');
    }

    public function eliminarTurno($turnos_id)
    {
        $turno=Turnos::find($turnos_id)->delete();

        return redirect()->route('listarTurnos');
    }
}
 



 