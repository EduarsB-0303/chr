<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = ['vij_ori','vij_des','vij_gui','vij_ton','vij_vto','vij_pct'
    ,'vij_mat','vij_det']; 

    public function camion(){
        return $this->belongsTo(Camion::Class);
    }
    public function camionero(){
        return $this->belongsTo(Camionero::Class);
    }
}
