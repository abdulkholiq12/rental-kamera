@extends('admin.layouts.app')

@section('content')
<div class="card">
  <div class="row">
    <div class="col-lg-12 mt40">
      <div class="pull-left">
        <h2>Tambah Produk</h2>
      </div>
    </div>
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

<form action="{{ route('product.store') }}" method="POST" name="add_note" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <strong class="text-black">Gambar</strong>
              <input type="file" class="form-control" id="customFile" name="gambar">
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Nama Barang</strong>
              <input type="text" name="nama_barang" class="form-control" placeholder="Enter Title">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Tipe Barang</strong>
              <input class="form-control" col="4" name="tipe_barang" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Harga Sewa Perhari</strong>
              <input type="int" class="form-control" col="4" name="harga_sewa_perhari" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Harga Sewa 1/2 Hari</strong>
              <input class="form-control" col="4" name="harga_sewa_setengah_hari" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Deskripsi</strong>
              <input class="form-control" col="4" name="deskripsi" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-danger">Submit</button>
          </div>
        </div>
      </div>
    </div>
</form>
@endsection
