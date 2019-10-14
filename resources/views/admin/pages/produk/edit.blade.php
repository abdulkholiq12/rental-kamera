@extends('admin.layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="padding-10">
      <h3>Update Produk</h3>
    </div>
  </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.update', $data->id) }}" method="POST" name="add_note" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
          <img src="{{ URL::to('/') }}/images/{{ $data->gambar }}" class="img-thumbnail"/>
            <strong class="text-black">Gambar</strong>
              <input type="file" class="form-control" id="customFile" name="gambar">
            </div>
          <div class="col-sm-6">
            <div class="form-group">
              <strong>Nama Barang</strong>
              <input type="text" name="nama_barang" class="form-control" value="{{ $data->nama_barang }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <strong>Tipe Barang</strong>
              <input class="form-control" col="4" name="tipe_barang" value="{{ $data->tipe_barang }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Harga Sewa Perhari</strong>
              <input type="int" class="form-control" col="4" name="harga_sewa_perhari" value="{{ $data->harga_sewa_perhari }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Harga Sewa 1/2 Hari</strong>
              <input class="form-control" col="4" name="harga_sewa_setengah_hari" value="{{ $data->harga_sewa_setengah_hari }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Deskripsi</strong>
              <input class="form-control" col="4" name="deskripsi" value="{{ $data->deskripsi }}" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
