<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table = 'grupos';
    protected $primaryKey='id';
    protected $fillable=['id','clave','turnos_id','semestres_id'];


    public function gruposEstudiantes(){
        return $this->hasMany('App\GruposEstudiantes');
    }

    public function turnos(){
        return $this->belongsTo('App\Turnos');
    }

     public function semestres(){
        return $this->belongsTo('App\Semestres');
    }
}
