<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestres extends Model
{
    protected $table = 'semestres';
    protected $primaryKey='id';
    protected $fillable=['grado'];

    public function grupos(){
        return $this->hasMany('App\Grupos');
    }
}
