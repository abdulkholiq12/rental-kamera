<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewArticle extends Model
{
  protected $fillable = [
    'judul',
    'tanggal',
    'deskripsi'
  ];
}
