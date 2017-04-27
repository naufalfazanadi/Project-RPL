<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->unsignedInteger('id_pembeli');
            $table->string('id_ban');
            $table->date('tgl_transaksi');
            $table->string('kode_resi');
            $table->integer('jumlah_barang');
            $table->timestamps();
            $table->foreign('id_pembeli')
                  ->references('id_pembeli')->on('pembelis')
                  ->onDelete('cascade');
            $table->foreign('id_ban')
                  ->references('id_ban')->on('bans')
                  ->onDelete('cascade');
            $table->boolean('status_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksis');
    }
}
