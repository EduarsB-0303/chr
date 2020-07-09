<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('vij_ori');
            $table->string('vij_des');
            $table->string('vij_gui');
            $table->float('vij_ton');
            $table->float('vij_vto');
            $table->integer('vij_pct');
            $table->string('vij_mat');
            $table->string('vij_det');
            $table->unsignedBigInteger('cam_id')->unsigned();
            $table->unsignedBigInteger('cmn_id')->unsigned();
            $table->foreign('cam_id')->references('id')->on('camioneros');
            $table->foreign('cmn_id')->references('id')->on('camions');
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
        Schema::dropIfExists('viajes');
    }
}
