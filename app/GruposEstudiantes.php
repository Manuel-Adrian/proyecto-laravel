<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposEstudiantes extends Model
{
    protected $table = 'grupos_estudiantes';
    protected $primaryKey='id';
    protected $fillable=['id','grupos_id','estudiantes_id'];


    public function estudiantes(){
        return $this->belongsTo('App\Estudiantes');
    }

    public function grupos(){
        return $this->belongsTo('App\Grupos');
    }
}
