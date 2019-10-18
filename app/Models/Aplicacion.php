<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    protected $primaryKey='id';

   	protected $table='aplicaciones';

    protected $fillable = ['nombre','categoria', 'descripcion'];

    protected $hidden = ['created_at','updated_at'];

    //inversa para el metodo polimorfico
    public function calificaciones(){
        return $this->morphMany('App\Models\Calificacion','calificable');
    }

}
