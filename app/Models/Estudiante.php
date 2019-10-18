<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $primaryKey='id';

   	protected $table='estudiantes';

    protected $fillable = ['identificacion','nombres', 'apellidos', 'correo'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a muchos
    public function notas(){
    	return $this->hasMany('App\Models\Nota');
    }
}
