<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programaciones';
    public function estudiantes(){
        return $this->belongsTo('App\Estudiante');
    }
    public function asignaturas(){
        return $this->belongsTo('App\Asignatura');
    }
    public function calificaciones(){ //RELACION INVERSA PARA LLEGAR DE CUALQUIER LADO
        return $this->belongsTo('App\Calificacion');
    }
}
