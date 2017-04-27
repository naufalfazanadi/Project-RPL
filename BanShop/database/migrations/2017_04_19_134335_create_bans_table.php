<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bans', function (Blueprint $table) {
            $table->string('id_ban');
            $table->primary('id_ban');
            $table->string('nama_ban');
            $table->string('merek');
            $table->integer('lebar');
            $table->integer('profil');
            $table->integer('diameter');
            $table->string('simbol_kecepatan')->length(2);
            $table->integer('indeks_muatan');
            $table->string('path_gambar');
            $table->integer('harga');
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
        Schema::drop('bans');
    }
}
