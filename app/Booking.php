<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  protected $fillable = [
    'nama',
    'nama_barang',
    'lama_sewa',
    'tanggal_penyewaan',
    'waktu_pengambilan',
    'alamat',
    'status'
  ];
}
