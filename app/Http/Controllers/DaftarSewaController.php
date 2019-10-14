<?php

namespace App\Http\Controllers;

use Redirect;
use App\rental;
use Illuminate\Http\Request;

class DaftarSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = rental::latest()->paginate(3);
      return view('admin.pages.sewa.list',  compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.sewa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nama' => 'required',
        'nama_barang' => 'required',
        'lama_sewa' => 'required',
        'tanggal_pengambilan' => 'required',
        'tanggal_pengembalian' => 'required',
        'waktu_pengambilan' => 'required',
        'alamat' => 'required',
        'harga_sewa' => 'required',
        'total_harga' => 'required',
        'status' => 'required'
      ]);

      rental::create($request->all());

      return Redirect::to('/admin/sewa')
    ->with('success','Great! Note created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = rental::findOrFail($id);
      return view('admin.pages.sewa.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = rental::findOrFail($id);
      return view('admin.pages.sewa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'nama' => 'required',
        'nama_barang' => 'required',
        'lama_sewa' => 'required',
        'tanggal_pengambilan' => 'required',
        'tanggal_pengembalian' => 'required',
        'waktu_pengambilan' => 'required',
        'alamat' => 'required',
        'harga_sewa' => 'required',
        'total_harga' => 'required',
        'status' => 'required'
      ]);
      $update = [
        'nama' => $request->nama,
        'nama_barang' => $request->nama_barang,
        'lama_sewa' => $request->lama_sewa,
        'tanggal_pengambilan' => $request->tanggal_pengambilan,
        'tanggal_pengembalian' => $request->tanggal_pengembalian,
        'waktu_pengambilan' => $request->waktu_pengambilan,
        'alamat' => $request->alamat,
        'harga_sewa' => $request->harga_sewa,
        'total_harga' => $request->total_harga,
        'status' => $request->status
      ];
      rental::where('id',$id)->update($update);

      return Redirect::to('/admin/sewa')
    ->with('success','Great! Data Sewa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      rental::where('id',$id)->delete();
      return Redirect::to('/admin/sewa')->with('success','Data Sewa deleted successfully');
    }
}
