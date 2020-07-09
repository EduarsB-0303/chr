<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaticos', function (Blueprint $table) {
            $table->id();
            $table->double('vit_ent');
            $table->double('vit_gdo');
            $table->double('vit_pje');
            $table->double('vit_grt');
            $table->unsignedBigInteger('vij_id')->unsigned();
            $table->foreign('vij_id')->references('id')->on('viajes');
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
        Schema::dropIfExists('viaticos');
    }
}
