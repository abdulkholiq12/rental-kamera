<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama');
          $table->string('nama_barang');
          $table->string('lama_sewa');
          $table->string('waktu_pengambilan');
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
        Schema::dropIfExists('rentals');
    }
}
