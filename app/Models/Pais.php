<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    
    protected $primaryKey='id';
   	protected $table='paises';
    protected $fillable = ['nombre'];
    protected $hidden = ['created_at','updated_at'];

    //relacion uno a uno
    public function presidente(){
    	return $this->hasOne('App\Models\Presidente');
    } 
}
