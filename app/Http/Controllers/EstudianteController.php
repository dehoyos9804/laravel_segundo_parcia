<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Nota;

class EstudianteController extends Controller
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
        $estudiante = new Estudiante;
        $estudiante->identificacion = $request->identificacion;
        $estudiante->nombres = $request->nombres;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->correo = $request->correo;
        $estudiante->save();

        //obtener el id insertado
        $idestudiante = $estudiante->id;

        $nota = new Nota;
        $nota->nota = $request->nota;
        $nota->estudiante_id = $idestudiante;
        $nota->save();

        return $nota->estudiante;
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
        $estudiante_id = Estudiante::inRandomOrder()->value('id');
        $estudiante = Estudiante::find($estudiante_id);
        $datos_estudiante = array();
        $datos_estudiante['identificacion'] = $estudiante->identificacion;
        $datos_estudiante['nombres'] = $request->nombres;
        $datos_estudiante['apellidos'] = $request->apellidos;
        $datos_estudiante['correo'] = $estudiante->correo;
        $estudiante->update($datos_estudiante);

        $nota_id = Nota::inRandomOrder()->value('id');
        $nota = Nota::find($nota_id);
        $datos_nota = array();
        $datos_nota['nota'] = $request->nota;
        $datos_nota['estudiente_id'] = $estudiante->id;
        $nota->update($datos_nota);

        return $estudiante->notas;
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
