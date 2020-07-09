<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaje;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes',compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IngresarViaje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viaje = new Viaje();
        $viaje->vij_ori = $request->input('ori');
        $viaje->vij_des = $request->input('des');
        $viaje->vij_gui = $request->input('gui');
        $viaje->vij_ton = $request->input('ton');
        $viaje->vij_vto = $request->input('vto');
        $viaje->vij_pct = $request->input('pct');
        $viaje->vij_mat = $request->input('mat');
        $viaje->vij_det = $request->input('det');
        $viaje->cam_id = $request->input('camionero_id');
        $viaje->cmn_id = $request->input('camion_id');
        $viaje->save();
        return view('interfaces01');
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
        $viaje = Viaje::find($id);
        return view('EditarViaje',compact('viaje'));
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
        $viaje = Viaje::findOrFail($id);
        $viaje->fill($request->all());
        $viaje->save();
        $viajes = Viaje::all();
        return view('Viajes',compact('viajes'));
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
