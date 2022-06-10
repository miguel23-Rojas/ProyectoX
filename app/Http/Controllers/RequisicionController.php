<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisicion;
use App\Models\Area;
use App\Models\Puesto;
use Auth;
use Illuminate\Support\Facades\DB;

class RequisicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->empresa;
        $area = Area::where('idEmpresa',$id)->get();
        $puesto = Puesto::all();
        $empres = Requisicion::where('idEmpresa', $id)->get();
        return view('requisicion.requisicion')->with('empresa',$empres)->with('area',$area)->with('puesto',$puesto)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisicion = new Requisicion();
        $requisicion->folio = $request->get('folio');
        $requisicion->motivo = $request->get('motivo');
        $requisicion->requisitos = $request->get('requisitos');
        $requisicion->detallePuesto = $request->get('detallep');
        $requisicion->nombreVacante = $request->get('nombre');
        $requisicion->idEmpresa = $request->get('empresa');
        $requisicion->idArea = $request->get('area');
        $requisicion->idPuesto = $request->get('puesto');
        $requisicion->iactiva = 1;

        $requisicion->save();

        return redirect('requisicion');
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

    public function verificar($id,$e){
        echo($e);
        Requisicion::where('id', $id)
        ->update([
        'iactiva' => $e
        ]);

        return redirect('requisicion');
    }
}
