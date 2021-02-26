<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';
       
         public function programaciones(){//para relacionar de 1 a 1 user nomas sin s se  utiliza s cuando es de 1 a muchos NESECITA UNA RELACION INVERSA
                 return $this->hasOne('App\Programa');
         }
}
