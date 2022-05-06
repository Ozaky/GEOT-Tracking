<?php

namespace App\Http\Controllers;

use App\Models\M_conductore;
use App\Models\M_vehiculo;
use Illuminate\Http\Request;

class C_vehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['vehiculos']=M_vehiculo::all();
        $datos['vehiculos']= M_vehiculo::where('Veh_estado','Activo')->get();
        return view('vehiculos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['conductores']=M_conductore::all();
        return view('vehiculos.frmR', $datos);  
    }

    public function mostrar()
    {
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */


    public function store(Request $request)
    {
        $vehiculos = request()->except('_token');
      
        if($request->hasFile("csoat", "ctecno", "ctpro")){
  
            $vehiculos['csoat'] = $request->file('csoat')->store('archivosvehiculo', 'public');
            $vehiculos['ctecno'] = $request->file('ctecno')->store('archivosvehiculo', 'public');
            $vehiculos['ctpro'] = $request->file('ctpro')->store('archivosvehiculo', 'public');
        }
           //return var_dump($vehiculos);
  
        $r = new M_vehiculo();
          $r->Veh_Con_id = $request->idconductor;
          $r->Veh_documento = $request->ndocumento;
          $r->Veh_modelo = $request->modelo;
          $r->Veh_año = $request->año;
          $r->Veh_estado = $request->estado;
          $r->Veh_placa = $request->placa;
          $r->Veh_matricula = $request->matricula;
          $r->Veh_soat = $request->soat;
          $r->Veh_tecnomecanica = $request->tecnomecanica;
          $r->Veh_c_soat = $request->csoat;
          $r->Veh_c_t_mecanica = $request->ctecno;
          $r->Veh_c_t_propiedad = $request->ctpro;
          $r->save();
    
    
        return '<script language="javascript">alert("Vehiculo Registrado");</script>';
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
        $vehiculo=M_vehiculo::findOrFail($id);
        $datos['conductores']=M_conductore::all();
        
        return view('vehiculos/frmE', compact('vehiculo'), $datos );
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
        $vehiculos = request()->except('_token','_method');
        M_vehiculo::where('id','=', $id)->update($vehiculos);
        //$datos['conductores']=M_conductore::all();
        $vehiculo=M_vehiculo::findOrFail($id);

        return redirect('/vehiculos');
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
