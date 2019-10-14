<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = product::latest()->paginate(3);
      return view('admin.pages.produk.list',  compact('data'));
      // dd($data);
      // $data = product::latest()->paginate(10);
      //   return view('admin.pages.produk.list', compact('data'))
      //           ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function storeImage(Request $request, $name)
    {
      $image = $request->file($name);

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);
      return $new_name;
    }
    public function store(Request $request)
    {
      $request->validate([
        'gambar' => 'required|image|max:2048',
        'nama_barang' => 'required',
        'tipe_barang' => 'required',
        'harga_sewa_perhari' => 'required',
        'harga_sewa_setengah_hari' => 'required',
        'deskripsi' => 'required'
    ]);
    $new_name = $this->storeImage($request,'gambar');
    $form_data = array(
      'nama_barang'               => $request->nama_barang,
      'tipe_barang'               => $request->tipe_barang,
      'harga_sewa_perhari'        => $request->harga_sewa_perhari,
      'harga_sewa_setengah_hari'  => $request->harga_sewa_setengah_hari,
      'deskripsi'                 => $request->deskripsi,
      'gambar'                    => $new_name
    );

    product::create($form_data);

    return Redirect::to('product')->with('success','Great! Note created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = product::findOrFail($id);
      return view('admin.pages.produk.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = product::findOrFail($id);
      return view('admin.pages.produk.edit', compact('data'));
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
          'gambar' => 'required',
          'nama_barang' => 'required',
          'tipe_barang' => 'required',
          'harga_sewa_perhari' => 'required',
          'harga_sewa_setengah_hari' => 'required',
          'deskripsi' => 'required'
      ]);

      $new_name = $this->storeImage($request,'gambar');
      $update = [
        'nama_barang' => $request->nama_barang,
        'tipe_barang' => $request->tipe_barang,
        'harga_sewa_perhari' => $request->harga_sewa_perhari,
        'harga_sewa_setengah_hari' => $request->harga_sewa_setengah_hari,
        'deskripsi' => $request->deskripsi,
        'gambar' => $new_name
      ];
      product::where('id',$id)->update($update);

      return Redirect::to('/admin/product')
    ->with('success','Great! Notes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      product::where('id',$id)->delete();
      return Redirect::to('product')->with('success','Note deleted successfully');
    }
}
