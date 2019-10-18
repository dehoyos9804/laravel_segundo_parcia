<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Pelicula;

class PeliculaController extends Controller
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
        $actor_id = Actor::inRandomOrder()->value('id');

        //creo nueva pelicula
        $pelicula = new Pelicula;
        $pelicula->nombre = $request->nombre;
        $pelicula->genero = $request->genero;
        $pelicula->save();

        $actor = Actor::find($actor_id);
        $peli = Pelicula::all()->pluck('id')->toArray();
        $actor->peliculas()->sync($peli);
        
        return $actor->peliculas;
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
        $actor_id = Actor::inRandomOrder()->value('id');

        $actor = Actor::find($actor_id);
        $datos_actor = array();
        $datos_actor['identificacion'] = $actor->identificacion;
        $datos_actor['nombres'] = $request->nombres;
        $datos_actor['apellidos'] = $request->apellidos;
        $datos_actor['correo'] = $actor->correo;
        $actor->update($datos_actor);


        $pelicula_id = Pelicula::inRandomOrder()->value('id');
        $pelicula = Pelicula::find($pelicula_id);
        $datos_pelicula = array();
        $datos_pelicula['nombre'] = $request->nombre_pelicula;
        $datos_pelicula['genero'] = $request->genero_pelicula;
        $pelicula->update($datos_pelicula);
        
        //actualizo la tabla pivote en caso de que exista la relacion
        $actor->peliculas()->updateExistingPivot($pelicula_id,['actor_id'=>$actor_id, 'pelicula_id'=>$pelicula_id]);

        return $actor->peliculas;
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
