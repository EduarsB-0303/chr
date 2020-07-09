<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    public function carnets(){
        return $this->hasMany(Viaje::Class);
    }
}
