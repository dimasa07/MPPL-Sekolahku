<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('kelas_belajar', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("deskripsi");
            $table->bigInteger('id_guru')->unsigned();
            $table->foreign('id_guru')->references('id')->on('guru');
            $table->bigInteger('id_mapel')->unsigned();
            $table->foreign('id_mapel')->references('id')->on('mata_pelajaran');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('kelas_belajar');
    }
};
