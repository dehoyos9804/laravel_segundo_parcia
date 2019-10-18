<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $primaryKey='id';

   	protected $table='notas';

    protected $fillable = ['nota', 'estudiante_id'];

    protected $hidden = ['created_at','updated_at'];

    //inversa de la relacion uno a muchos
    public function estudiante(){
    	return $this->belongsTo('App\Models\Estudiante','estudiante_id');
    }
}
