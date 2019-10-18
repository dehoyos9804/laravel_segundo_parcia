<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    protected $primaryKey='id';
   	protected $table='presidentes';
    protected $fillable = ['nombres','apellidos','pais_id'];
    protected $hidden = ['created_at','updated_at'];

    //relacion inversa de uno a uno
    public function pais(){
    	return $this->belongsTo('App\Models\Pais', 'pais_id');
    }
}
