<?php

namespace App\Http\Controllers;

use App\direccion;
use Illuminate\Http\Request;

class direccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $direccion=\DB::select('SELECT * FROM direccion');
        return view('Usuarios.indexDireccion',compact('direccion')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.crearDireccion');
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
        $this->validate($request,[ 'calle'=>'required', 'colonia'=>'required', 'delegacion'=>'required', 'numero'=>'required', 'usuario'=>'required']);
        direccion::create($request->all());
        return redirect()->route('showAdress')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //queda pendiente el return 
        $direccion=direccion::find($id);
        return  view('Usuarios.editar',compact('direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //queda pendiente la vista o el return 
        $direccion=direccion::find($id);
       // return view('Usuarios.editarDireccion',compact('usuario'));
        return view('Usuarios.editarDireccion')->with('direccion',$direccion);
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
        $this->validate($request,[ 'calle'=>'required', 'colonia'=>'required', 'delegacion'=>'required', 'numero'=>'required','usuario'=>'required' ]);
 
        direccion::find($id)->update($request->all());
        return redirect()->route('showAdress')->with('success','Registro actualizado satisfactoriamente');
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
        direccion::find($id)->delete();
        return redirect()->route('showAdress')->with('success','Registro eliminado satisfactoriamente');
    }
}
