<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $primaryKey='id';

   	protected $table='peliculas';

    protected $fillable = ['nombre', 'genero'];

    protected $hidden = ['created_at','updated_at'];

    //relacion muchos a muchos
    public function actores(){
        return $this->belongsToMany('App\Models\Actor');
    }
}
