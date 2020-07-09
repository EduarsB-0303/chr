<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remuneracion;

class RemuneracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remuneraciones = Remuneracion::all();
        
        return view('Remuneraciones',compact('remuneraciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IngresarRemuneracion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $remuneracion = new Remuneracion();
        $remuneracion->rum_fch = $request->input('fecha');
        $remuneracion->rum_bse = $request->input('bse');
        $remuneracion->rum_sue = $request->input('sue');
        $remuneracion->rum_bvj = $request->input('bvj');
        $remuneracion->rum_tsp = $request->input('tsp');
        $remuneracion->rum_grt = $request->input('grt');
        $remuneracion->rum_vet = $request->input('vet');
        $remuneracion->rum_vgs = $request->input('vgs');
        $remuneracion->rum_pje = $request->input('pje');
        $remuneracion->rum_mov = $request->input('mov');
        $remuneracion->rum_clc = $request->input('clc');
        $remuneracion->rum_hrr = $request->input('hrr');
        $remuneracion->rum_fan = $request->input('fan');
        $remuneracion->rum_fpr = $request->input('fpr');
        $remuneracion->rum_afp = $request->input('afp');
        $remuneracion->rum_sal = $request->input('sal');
        $remuneracion->rum_adc = $request->input('adc');
        $remuneracion->rum_scs = $request->input('scs');
        $remuneracion->rum_iuc = $request->input('iuc');
        $remuneracion->rum_art = $request->input('art');
        $remuneracion->rum_ant = $request->input('ant');
        $remuneracion->rum_sue = $request->input('sue');
        $remuneracion->cam_id = $request->input('camionero_id');
        $remuneracion->save();
        return view("interfaces01");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remuneracion = Remuneracion::find($id);
        return view('ShowRemuneracion', compact('remuneracion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remuneracion = Remuneracion::find($id);
        return view('EditarRemuneracion',compact('remuneracion'));
        
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
        $remuneracion = Remuneracion::findOrFail($id);
        $remuneracion->fill($request->all());
        $remuneracion->save();
        $remuneraciones = Remuneracion::all();
        return view('Remuneraciones',compact('remuneraciones'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remuneracion = Remuneracion::findOrFail($id);
        $remuneracion->delete();
        $remuneraciones = Remuneracion::all();
        return view('Remuneraciones',compact('remuneraciones'));
    }
}
