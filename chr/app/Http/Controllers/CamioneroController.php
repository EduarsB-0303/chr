<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camionero;
use App\Http\Requests\StoreCamioneroRequest;

class CamioneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camioneros = Camionero::all();
        return view('Camioneros',compact('camioneros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IngresarCamionero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCamioneroRequest $request)
    {

        
        $camionero = new Camionero();
        $camionero->rut = $request->input("rut");
        $camionero->chr_nom = $request->input("nombre");
        $camionero->chr_ape = $request->input("apellido");
        $camionero->chr_con = $request->input("contrato");
        $camionero->chr_nac = $request->input("nac");
        $camionero->chr_dir = $request->input("dir");
        $camionero->chr_sal = $request->input("salud");
        $camionero->chr_tal = $request->input("talla");
        $camionero->chr_cal = $request->input("calzado");
        $camionero->chr_ban = $request->input("banco");
        $camionero->chr_cto = $request->input("contacto");
        $camionero->chr_gnr = $request->input("sexo");
        $camionero->estado = $request->input("estado");
        $camionero->save();
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
        $camionero = Camionero::find($id);
        return view('EditarCamionero',compact('camionero'));
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
        $camionero = Camionero::findOrFail($id);
        $camionero->fill($request->all());
        $camionero->save();
        $camioneros = Camionero::all();
        return view('Camioneros',compact('camioneros'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $camionero = Camionero::find($id);
        $camionero->delete();
        return view('interfaces01');
    }
}
