<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ObraController extends Controller
{
    //
    public function index()
    {
        $obras= Obra::get();
        return view ('obras.index')->with ('obras',$obras);
    }

    public function create()
    {
        return view ('obras.create');
    }

    public function store(Request $request)
    {
        //

        $reglas = [
            "nombre" => 'required|regex:/^[a-zA-Z\s]+$/u',
            "area" => 'required|numeric',
            "perimetro" => 'required|numeric',
            "tipopiso" => 'required',
            "direccion" => 'required',
            "estado" => 'required',
            "plano" => 'required|mimes:jpg,jpeg,bmp,png'
        ];

        $validador= Validator::make($request->all(),$reglas);

        if($validador->fails()){
            return redirect('obras/create')->withErrors($validador)->withInput();
        }
        else {

        $obra= new Obra();
        $maxid= Obra::all()->max('IdObra');
        $maxid++;
        $obra->IdObra = $maxid;
        $obra->Nombre = $request->input('nombre');
        $obra->Area = $request->input('area');
        $obra->Perimetro = $request->input('perimetro');
        $obra->TipoPiso = $request->input('tipopiso');
        $obra->Direccion = $request->input('direccion');
        $obra->Estado = $request->input('estado');
        $obra->Plano = $request->file('plano');


        if($request->hasFile('plano')){
            $obra['Plano']=$request->file('plano')->store('uploads','public');
        }
        $obra->save();

        return redirect('obras')->with('mensaje','Registro satisfactorio');

        }
    }

    public function show($id)
    {
        //
        return view('obras.show')->with('obra',Obra::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obra= Obra::find($id);

        return view ('obras.edit')->with("obra",$obra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $obra= Obra::find($id);

        $obra->Nombre = $request->input('nombre');
        $obra->Area = $request->input('area');
        $obra->Perimetro = $request->input('perimetro');
        $obra->TipoPiso = $request->input('tipopiso');
        $obra->Direccion = $request->input('direccion');
        $obra->Estado = $request->input('estado');

        if($request->hasFile('plano')){
            $obra->Plano = $request->file('plano');
            Storage::delete('public/'.$obra->Plano);
            $obra['Plano']=$request->file('plano')->store('uploads','public');
        }

        $obra->save();

        return redirect ('obras')->with('mensaje','Obra actualizada');
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
        $obra=Obra::findOrFail($id);
        if(Storage::delete('public/'.$obra->Plano)){
            Obra::destroy($id);
        }

        return redirect('obras');
    }
}
