<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $primaryKey='id';

   	protected $table='calificaciones';

    protected $fillable = ['calificacion','calificable_id', 'calificable_type'];

    protected $hidden = ['created_at','updated_at'];

    //metodo polimorfico
    public function calificable(){
        return $this->morphTo();
    }
}
