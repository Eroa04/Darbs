<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios= Usuario::get();
        return view ('usuarios.index')->with ('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //

        $reglas = [
            "nombre" => 'required|regex:/^[a-zA-Z\s]+$/u',
            "apellido" => 'required|regex:/^[a-zA-Z\s]+$/u',
            "tipodoc" => 'required',
            "numdoc" => 'required|numeric|unique:usuario,NumDoc',
            "genero" => 'required',
            "fechanac" => 'required',
            "correo" => 'required|email|unique:usuario,Correo',
            "celular" => 'numeric',
            "direccion" => 'required',
            "cargo" => 'required',
            "estado" => 'required',
            "foto" => 'required|mimes:jpg,jpeg,bmp,png'
        ];

        $mensajes = [
            "correo.unique" => "El correo ya existe.",
            "numdoc.unique" => "El numero de documento ya existe."
        ];

        $validador= Validator::make($request->all(),$reglas,$mensajes);

        if($validador->fails()){
            return redirect('usuarios/create')->withErrors($validador)->withInput();
        }
        else {

        $usuario= new Usuario();
        $maxid= Usuario::all()->max('IdUsuario');
        $maxid++;
        $usuario->IdUsuario = $maxid;
        $usuario->Nombres = $request->input('nombre');
        $usuario->Apellidos = $request->input('apellido');
        $usuario->TipoDoc = $request->input('tipodoc');
        $usuario->NumDoc = $request->input('numdoc');
        $usuario->Genero = $request->input('genero');
        $usuario->FechaNac = $request->input('fechanac');
        $usuario->Celular = $request->input('celular');
        $usuario->Correo = $request->input('correo');
        $usuario->Direccion = $request->input('direccion');
        $usuario->Cargo = $request->input('cargo');
        $usuario->Contrasena = Str::random(10);
        $usuario->Estado = $request->input('estado');
        $usuario->Foto = $request->file('foto');


        if($request->hasFile('foto')){
            $usuario['Foto']=$request->file('foto')->store('uploads','public');
        }
        $usuario->save();

        return redirect('usuarios')->with('mensaje','Registro satisfactorio');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('usuarios.show')->with('usuario',Usuario::find($id));
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
        $usuario= Usuario::find($id);

        return view ('usuarios.edit')->with("usuario",$usuario);
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
        $usuario= Usuario::find($id);

        $usuario->Nombres = $request->input('nombre');
        $usuario->Apellidos = $request->input('apellido');
        $usuario->TipoDoc = $request->input('tipodoc');
        $usuario->NumDoc = $request->input('numdoc');
        $usuario->Genero = $request->input('genero');
        $usuario->FechaNac = $request->input('fechanac');
        $usuario->Celular = $request->input('celular');
        $usuario->Correo = $request->input('correo');
        $usuario->Direccion = $request->input('direccion');
        $usuario->Cargo = $request->input('cargo');
        $usuario->Contrasena = $request->input('contrasena');
        $usuario->Estado = $request->input('estado');

        if($request->hasFile('foto')){
            $usuario->Foto = $request->file('foto');
            Storage::delete('public/'.$usuario->Foto);
            $usuario['Foto']=$request->file('foto')->store('uploads','public');
        }

        $usuario->save();

        return redirect ('usuarios')->with('mensaje','Usuario actualizado');
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
        $usuario=Usuario::findOrFail($id);
        if(Storage::delete('public/'.$usuario->Foto)){
            Usuario::destroy($id);
        }

        return redirect('usuarios');
    }
}
