<?php

namespace App\Http\Controllers;
use App\product;
use App\Booking;
use Redirect;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('user.pages.home.home');
  }
  public function about()
  {
    return view('user.pages.about.about');
  }
  public function product()
  {
    $data = product::latest()->paginate(3);
    return view('user.pages.product.product', compact('data'));
  }
  public function detailproduct($id)
    {
      $data = product::where('id', $id)->first();
      return view('user.pages.product.detail', compact('data'));
    }
  public function termandcondition()
  {
    return view('user.pages.tac.tac');
  }
  public function article()
  {
    return view('user.pages.article.article');
  }
  public function booking()
  {
    return view('user.pages.booking');
  }
  public function store(Request $request)
    {
      $request->validate([
        'nama' => 'required',
        'nama_barang' => 'required',
        'lama_sewa' => 'required',
        'tanggal_penyewaan' => 'required',
        'waktu_pengambilan' => 'required',
        'alamat' => 'required',
      ]);

      Booking::create($request->all());

      return Redirect::to('/')
    ->with('success','Great! Note created successfully.');
    }
}
