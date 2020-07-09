<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remuneracion extends Model
{
    protected $fillable = ['rum_fch', 'rum_bse', 'rum_sue', 'rum_bvj', 'rum_tsp', 'rum_grt',
        'rum_vet', 'rum_vgs', 'rum_pje', 'rum_mov', 'rum_clc', 'rum_hrr', 'rum_fan', 'rum_fpr'
        , 'rum_afp', 'rum_sal', 'rum_adc', 'rum_scs', 'rum_iuc', 'rum_art', 'rum_ant'];
    public function camionero(){
        return $this->belongsTo(Camionero::Class);
    }
}
