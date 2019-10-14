@extends('admin.layouts.app')

@section('content')
<div class="card">
  <div class="row">
    <div class="col-lg-12 mt40">
      <div class="pull-left">
        <h2>Tambah Data Booking</h2>
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

<form action="{{ route('booking.store') }}" method="POST" name="add_note" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              <strong>Nama</strong>
              <input type="text" name="nama" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <strong>Nama Barang</strong>
              <input type="text" name="nama_barang" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <strong>Lama Sewa</strong>
              <select class="form-control" name="lama_sewa">
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
              <strong>Tanggal Penyewaan</strong>
                <input type='date' class="form-control" name="tanggal_penyewaan"/>
            </div>
            <div class="form-group">
              <strong>Waktu Pengambilan</strong>
                <input type='string' class="form-control" name="waktu_pengambilan"/>
            </div>
            <div class="form-group">
              <strong>Alamat</strong>
              <textarea class="form-control" rows="5" name="alamat" placeholder="Enter Alamat"></textarea>
            </div>
            <div class="form-group">
              <strong>Status</strong>
              <select class="form-control" name="status">
                <option>Belum Di Sewa</option>
                <option>Sudah Di Sewa</option>
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
