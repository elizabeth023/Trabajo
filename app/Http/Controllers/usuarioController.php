<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario=DB::select('SELECT * FROM usuario');
        return view('Usuarios.index',compact('usuario')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.crear');
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
        $this->validate($request,[ 'nombre'=>'required', 'ape_paterno'=>'required', 'ape_materno'=>'required', 'edad'=>'required']);
        usuario::create($request->all());
        //DB::table('usuario')->insert(['nombre' => 'nombre', 'ape_paterno'=>'ape_paterno', 'ape_materno'=>'ape_materno','edad'=>'edad' ]);
        //DB::insert('INSERT INTO usuario (nombre,ape_paterno,ape_materno,edad) VALUES (nombre,ape_paterno,ape_materno,edad) ');
        return redirect()->route('showUsers')->with('success','Registro creado satisfactoriamente');
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
        $usario=usuario::find($id);
        return  view('usuario.show',compact('usuario'));
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
        $usuario=usuario::find($id);
       // return view('Usuarios.editar',compact('usuario'));
       // $usuario = Pastel::find($id);
        return view('Usuarios.editar')->with('usuario',$usuario);
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
        $this->validate($request,[ 'nombre'=>'required', 'ape_paterno'=>'required', 'ape_materno'=>'required', 'edad'=>'required']);
 
        usuario::find($id)->update($request->all());
        return redirect()->route('showUsers')->with('success','Registro actualizado satisfactoriamente');
 
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
        usuario::find($id)->delete();
        return redirect()->route('showUsers')->with('success','Registro eliminado satisfactoriamente');
    }
}
