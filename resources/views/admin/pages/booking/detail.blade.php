@extends('admin.layouts.app')

@section('content')
<!-- <div  class="spacing-20"></div> -->
  <div class="container">
    <div class="card">
      <div class="padding-10">
        <h3>Data Sewa {{ $data->nama }}</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
      <div class="row">
        <div class="col">
          <div class="padding-10">
            <div class="margin-bottom-40">
              <h4>Nama : {{ $data->nama }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Nama Barang : {{ $data->nama_barang }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Sewa : {{ $data->lama_sewa }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Tanggal Penyewaan : {{ date('d-m-Y', strtotime($data->tanggal_penyewaan)) }}</h4>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="padding-10">
            <div class="margin-bottom-40">
              <h4>Waktu Pengambilan : {{ $data->waktu_pengambilan }} WIB</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Alamat : {{ $data->alamat }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Status : {{ $data->status }}</h4>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <a href="{{ route('booking.edit', $data->id)}}"><button type="submit" class="btn btn-warning"><i class="material-icons">create</i>&nbsp;Update</button></a>
                <a href="{{ route ('booking.index')}}"><button type="submit" class="btn btn-dark"><i class="material-icons">close</i>&nbsp;Cancel</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
