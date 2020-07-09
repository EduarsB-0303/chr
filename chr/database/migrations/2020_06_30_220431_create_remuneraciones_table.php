<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemuneracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remuneracions', function (Blueprint $table) {
            $table->id();
            $table->date('rum_fch');
            $table->double('rum_bse');
            $table->double('rum_sue');
            $table->double('rum_bvj');
            $table->double('rum_tsp');
            $table->double('rum_grt');
            $table->double('rum_vet');
            $table->double('rum_vgs');
            $table->double('rum_pje');
            $table->double('rum_mov');
            $table->double('rum_clc');
            $table->double('rum_hrr');
            $table->double('rum_fan');
            $table->double('rum_fpr');
            $table->double('rum_afp');
            $table->double('rum_sal');
            $table->double('rum_adc');
            $table->double('rum_scs');
            $table->double('rum_iuc');
            $table->double('rum_art');
            $table->double('rum_ant');
            $table->unsignedBigInteger('cam_id')->unsigned();
            $table->foreign('cam_id')->references('id')->on('camioneros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remuneraciones');
    }
}
