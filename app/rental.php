<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rental extends Model
{
  protected $fillable = [
    'nama',
    'nama_barang',
    'lama_sewa',
    'tanggal_pengambilan',
    'tanggal_pengembalian',
    'waktu_pengambilan',
    'alamat',
    'harga_sewa',
    'total_harga',
    'status'
  ];
}
