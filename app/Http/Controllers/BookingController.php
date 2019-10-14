<?php

namespace App\Http\Controllers;

use Redirect;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Booking::latest()->paginate(3);
      return view('admin.pages.booking.list',  compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.booking.create');
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
        'tanggal_penyewaan' => 'required',
        'waktu_pengambilan' => 'required',
        'alamat' => 'required',
        'status' => 'required'
      ]);

      Booking::create($request->all());

      return Redirect::to('/admin/booking')
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
      $data = Booking::findOrFail($id);
      return view('admin.pages.booking.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = Booking::findOrFail($id);
      return view('admin.pages.booking.edit', compact('data'));
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
        'tanggal_penyewaan' => 'required',
        'waktu_pengambilan' => 'required',
        'alamat' => 'required',
        'status' => 'required'
      ]);
      $update = [
        'nama' => $request->nama,
        'nama_barang' => $request->nama_barang,
        'lama_sewa' => $request->lama_sewa,
        'tanggal_penyewaan' => $request->tanggal_penyewaan,
        'waktu_pengambilan' => $request->waktu_pengambilan,
        'alamat' => $request->alamat,
        'status' => $request->status
      ];
      Booking::where('id',$id)->update($update);

      return Redirect::to('/admin/booking')
    ->with('success','Great! Data Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Booking::where('id',$id)->delete();
      return Redirect::to('/admin/booking')->with('success','Data Sewa deleted successfully');
    }
}
