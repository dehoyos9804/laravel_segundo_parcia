<?php

namespace App\Http\Controllers;
use App\Models\Aplicacion;
use App\Models\Servicio;
use App\Models\Calificacion;

use Illuminate\Http\Request;

class CalificacionController extends Controller
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
        //obtener la llave principal aleatoria
        $aplicacion_id = Aplicacion::inRandomOrder()->value('id');
        $aplicacion = Aplicacion::find($aplicacion_id);
        $aplicacion->calificaciones()->create(['calificacion'=>$request->calificacion_pelicula]);

        $servicio_id = Servicio::inRandomOrder()->value('id');
        $servicio = Servicio::find($servicio_id);
        $servicio->calificaciones()->create(['calificacion'=>$request->calificacion_servicio]);

        return $aplicacion->calificaciones.
               $servicio->calificaciones;
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
        $aplicacion_id = Aplicacion::inRandomOrder()->value('id');
        $aplicacion = Aplicacion::find($aplicacion_id);
        $datos_aplicacion = array();
        $datos_aplicacion['nombre'] = $request->nombre_aplicacion;
        $datos_aplicacion['categoria'] = $request->categoria_aplicacion;
        $datos_aplicacion['descripcion'] = $request->descripcion_aplicacion;
        $aplicacion->update($datos_aplicacion);

        $servicio_id = Servicio::inRandomOrder()->value('id');
        $servicio = Servicio::find($servicio_id);
        $datos_servicio = array();
        $datos_servicio['nombre'] = $request->nombre_servicio;
        $datos_servicio['descripcion'] = $request->descripcion_servicio;
        $servicio->update($datos_servicio);

        $calificacion_id = Calificacion::inRandomOrder()->value('id');
        $calificacion = Calificacion::find($calificacion_id);
        $datos_calificacion = array();
        $datos_calificacion['calificacion'] = $request->calificacion;
        $datos_calificacion['calificable_id'] = $calificacion->calificable_id;
        $datos_calificacion['calificable_type'] = $calificacion->calificable_type;
        $calificacion->update($datos_calificacion);

        return "Datos Actualizados Correctamente";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $calificacion_id = Calificacion::inRandomOrder()->value('id');
        $calificacion = Calificacion::find($calificacion_id);
        $calificacion->delete();

        return "la calificacion ".$calificacion->id." Se Elimino del sistema";
    }
}
