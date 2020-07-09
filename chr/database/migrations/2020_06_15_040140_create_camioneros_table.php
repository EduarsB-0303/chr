<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('chr_nom');
            $table->string('chr_ape');
            $table->date('chr_con');
            $table->date('chr_nac');
            $table->string('chr_dir');
            $table->string('chr_sal');
            $table->string('chr_tal');
            $table->integer('chr_cal');
            $table->string('chr_ban');
            $table->string('chr_cto');
            $table->string('chr_gnr');
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
        Schema::dropIfExists('camioneros');
    }
}
