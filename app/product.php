<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $fillable = [
    'gambar',
    'nama_barang',
    'tipe_barang',
    'harga_sewa_perhari',
    'harga_sewa_setengah_hari',
    'deskripsi'
  ];
}
