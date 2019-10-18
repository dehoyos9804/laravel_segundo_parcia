<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $primaryKey='id';

   	protected $table='servicios';

    protected $fillable = ['nombre','descripcion'];

    protected $hidden = ['created_at','updated_at'];

    //inversa para el metodo polimorfico
    public function calificaciones(){
        return $this->morphMany('App\Models\Calificacion','calificable');
    }
}
