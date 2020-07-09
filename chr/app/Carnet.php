<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    public function camionero(){
        return $this->belongsTo('App\Camionero');
    }
}
