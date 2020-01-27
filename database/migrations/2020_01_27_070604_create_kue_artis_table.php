<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKueArtisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kue_artis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('foto');
            $table->string('deskripsi');
            $table->string('nama_pemilik');
            $table->string('foto_pemilik');
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
        Schema::dropIfExists('kue_artis');
    }
}
