<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->id();
            $table->string('lic_num');
            $table->string('lic_cla');
            $table->string('lic_mun');
            $table->date('lic_ven');
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
        Schema::dropIfExists('licencias');
    }
}
