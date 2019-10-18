<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $primaryKey='id';

   	protected $table='actores';

    protected $fillable = ['identificacion','nombres', 'apellidos', 'correo'];

    protected $hidden = ['created_at','updated_at'];

    //relacion muchos a muchos
    public function peliculas(){
        return $this->belongsToMany('App\Models\Pelicula');
    }

}
