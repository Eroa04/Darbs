<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Obra;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActividadController extends Controller
{
    //
    public function index()
    {
        $actividades= Actividad::get();
        return view ('actividades.index')->with('actividades',$actividades);
    }

    public function create()
    {
        $obras= Obra::get();
        $actividades= Actividad::get();
        return view ('actividades.create',['obras' => $obras, 'actividades' => $actividades ]);
    }

    public function store(Request $request)
    {
        //

        $reglas = [
            "nombre" => 'required|regex:/^[a-zA-Z\s]+$/u',
            "descripcion" => 'required',
            "fechainicio" => 'required',
            "fechafin" => 'required',
            "estado" => 'required',
            "idobra" => 'required'
        ];

        $validador= Validator::make($request->all(),$reglas);

        if($validador->fails()){
            return redirect('actividades/create')->withErrors($validador)->withInput();
        }
        else {

        $actividad= new Actividad();
        $maxid= Actividad::all()->max('IdActividad');
        $maxid++;
        $actividad->IdActividad = $maxid;
        $actividad->Nombre = $request->input('nombre');
        $actividad->Descripcion = $request->input('descripcion');
        $actividad->FechaInicio = $request->input('fechainicio');
        $actividad->FechaFin = $request->input('fechafin');
        $actividad->Estado = $request->input('estado');
        $actividad->IdObra = $request->input('idobra');

        $actividad->save();

        return redirect('actividades')->with('mensaje','Registro satisfactorio');

        }
    }

    public function show($id)
    {
        //
        $obras= Obra::get();
        return view('actividades.show')->with('actividad',Actividad::find($id))->with("obras",$obras);
    }

    public function edit($id)
    {
        //
        $obras= Obra::get();
        $actividad= Actividad::find($id);

        return view ('actividades.edit')->with("actividad",$actividad)->with("obras",$obras);
    }

    public function update(Request $request, $id)
    {
        //
        $actividad= Actividad::find($id);

        $actividad->Nombre = $request->input('nombre');
        $actividad->Descripcion = $request->input('descripcion');
        $actividad->FechaInicio = $request->input('fechainicio');
        $actividad->FechaFin = $request->input('fechafin');
        $actividad->Estado = $request->input('estado');
        $actividad->IdObra = $request->input('idobra');

        $actividad->save();

        return redirect ('actividades')->with('mensaje','Actividad actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $actividad=Actividad::findOrFail($id);
        Actividad::destroy($id);

        return redirect('actividades');
    }
}
