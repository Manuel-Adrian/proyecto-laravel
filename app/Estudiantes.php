<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey='id';
    protected $fillable=['id','nombre','apellido_paterno','apellido_materno','edad','email','telefono'];


    public function gruposEstudiantes(){
        return $this->hasMany('App\GruposEstudiantes','estudiantes_id');
    }
}
