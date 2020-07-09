<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    protected $fillable = ['rut','chr_nom','chr_ape','chr_con','chr_nac','chr_dir','chr_sal','chr_cal',
    'chr_ban','chr_cto','chr_gnr'];
    /*
    protected $primaryKey = 'rut'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    */
    public function carnets(){
        return $this->hasMany(Carnet::Class);
    }
    public function licencias(){
        return $this->hasMany(Licencia::Class);
    }
    public function remuneraciones(){
        return $this->hasMany(Remuneracion::Class);
    }
    public function viajes(){
        return $this->hastMany(Viaje::Class);
    }
}
