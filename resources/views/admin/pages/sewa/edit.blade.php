@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Tambah Produk</h2>
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

<form action="{{ route('sewa.update', $data->id) }}" method="POST" name="add_note" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <strong>Nama</strong>
              <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <strong>Nama Barang</strong>
              <input type="text" name="nama_barang" class="form-control" value="{{ $data->nama_barang }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <strong>Lama Sewa</strong>
              <select class="form-control" name="lama_sewa">
                <option>{{ $data->lama_sewa }}</option>
                <option>12 Jam</option>
                <option>1 Hari</option>
                <option>2 Hari</option>
                <option>3 Hari</option>
                <option>4 Hari</option>
                <option>5 Hari</option>
                <option>6 Hari</option>
                <option>7 Hari</option>
              </select>
              <!-- <input type="number" class="form-control" col="4" name="lama_sewa" placeholder="Enter Description"> -->
            </div>
            <div class="form-group">
              <strong>Tanggal Pengambilan</strong>
                <input type='date' class="form-control" name="tanggal_pengambilan" value="<?php echo date('Y-m-d',strtotime($data->tanggal_pengambilan)) ?>"/>
            </div>
            <div class="form-group">
              <strong>Tanggal Pengembalian</strong>
              <input type='date' class="form-control" name="tanggal_pengembalian" value="<?php echo date('Y-m-d',strtotime($data->tanggal_pengembalian)) ?>" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <strong>Waktu Pengambilan</strong>
                <input type='text' class="form-control" name="waktu_pengambilan" value="{{ $data->waktu_pengambilan }}"/>
            </div>
            <div class="form-group">
              <strong>Alamat</strong>
              <input class="form-control" col="4" name="alamat" value="{{ $data->alamat }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Harga Sewa</strong>
              <input class="form-control" col="4" name="harga_sewa" value="{{ $data->harga_sewa }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Total Harga</strong>
              <input class="form-control" col="4" name="total_harga" value="{{ $data->total_harga }}" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <strong>Status</strong>
              <select class="form-control" name="status">
                <option>{{ $data->status }}</option>
                <option>Sudah Dikembalikan</option>
              </select>
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
