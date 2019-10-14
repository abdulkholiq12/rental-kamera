<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
    {
      return view('admin.pages.home.home');
    }
  public function sewa()
    {
      return view('admin.pages.sewa.sewa');
    }
  public function produk()
    {
      return view('admin.pages.produk.produk');
    }
}
