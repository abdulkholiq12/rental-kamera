<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_sewas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama');
          $table->string('nama_barang');
          $table->string('lama_sewa');
          $table->dateTime('waktu_pengambilan');
          $table->dateTime('tanggal_pengambilan');
          $table->dateTime('tanggal_pengembalian');
          $table->text('alamat');
          $table->bigInteger('harga_sewa');
          $table->bigInteger('total_harga');
          $table->string('status');
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
        Schema::dropIfExists('daftar_sewas');
    }
}
