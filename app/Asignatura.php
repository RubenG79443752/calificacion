<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    
    protected $table = 'asignaturas';
    public function programaciones(){
        return $this->hasMany('App\Programa');
   
}  
}
