<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    protected $table = 'turnos';
    protected $primaryKey='id';
    protected $fillable=['horario'];

    public function grupos(){
        return $this->hasMany('App\Grupos');
    }
}
