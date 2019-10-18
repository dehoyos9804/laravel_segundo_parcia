<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Presidente;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pais_guardar = new Pais;
        $pais_guardar->nombre = 'COLOMBIA';
        $pais_guardar->save();

        //obtener la llave principal aleatoria
        $pais_id = Pais::inRandomOrder()->value('id');

        //guardar presidente
        $presidente = new Presidente;
        $presidente->nombres = $request->nombres;
        $presidente->apellidos = $request->apellidos;
        $presidente->pais_id = $pais_id;
        $presidente->save();

        return $presidente;
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
    public function update(Request $request)
    {
        //obtener la llave principal aleatoria
        $pais_id = Pais::inRandomOrder()->value('id');
        $pais = Pais::find($pais_id);
        $datos_pais = array();
        $datos_pais['nombre'] = $request->nombre_pais;
        $pais->update($datos_pais);

        $presidente_id = Presidente::inRandomOrder()->value('id');

        $presidente = Presidente::find($presidente_id);
        $datos_presidente = array();
        $datos_presidente['nombres'] = $request->nombres;
        $datos_presidente['apellidos'] = $request->apellidos;
        $datos_presidente['pais_id'] = $pais_id;
        $presidente->update($datos_presidente);

        return $presidente;
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
