<?php

namespace App\Http\Controllers;

use App\Models\M_conductore;
use Illuminate\Http\Request;

class C_conductore extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['conductores']=M_conductore::all();
        return view('conductor.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductor/frmR');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductores = request()->except('_token');
      
        if($request->hasFile("cpase", "ccedula", "chojav")){
  
              $conductores['cpase'] = $request->file('cpase')->store('archivos', 'public');
              $conductores['ccedula'] = $request->file('ccedula')->store('archivos', 'public');
              $conductores['chojav'] = $request->file('chojav')->store('archivos', 'public');
        }
  
        $r = new M_conductore();
          $r->Con_nombre = $request->nombre;
          $r->Con_apellido = $request->apellido;
          $r->Con_telefono = $request->telefono;
          $r->Con_direccion = $request->direccion;
          $r->Con_n_pase = $request->pase;
          $r->Con_c_pase = $request->cpase;
          $r->Con_n_documento = $request->cedula;
          $r->Con_c_documento = $request->ccedula;
          $r->Con_c_hoja_vida = $request->chojav;
          $r->save();
    
    
        return '<script language="javascript">alert("Registro Exitoso");</script>';
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
    }
}
