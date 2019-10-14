@extends('user.layouts.app')

@section('content')
<!-- <div  class="spacing-20"></div> -->
  <div class="container">
    <div class="card-detail">
      <div class="padding-10">
        <h2>Detail Produk {{ $data->nama_barang }}</h2>
      </div>
    </div>
    <div class="card-detail">
      <div class="card-body-detail">
      <div class="row">
        <div class="col-sm-6">
          <!-- <div class="padding-20"> -->
            <img src="{{ URL::to('/') }}/images/{{ $data->gambar }}" class="img-thumbnail"/>
          <!-- </div> -->
        </div>
        <div class="col-sm-6">
          <div class="card-title-detail">
            <div class="margin-bottom-40-detail">
              <h4>Nama Barang : <b>{{ $data->nama_barang }}</b></h4>
            </div>
            <div class="margin-bottom-40-detail">
              <h4>Tipe Barang : <b>{{ $data->tipe_barang }}</b></h4>
            </div>
            <div class="margin-bottom-40-detail">
              <h4>Harga Sewa Perhari/24jam : <b>Rp.&nbsp;{{ number_format($data->harga_sewa_perhari, 0) }}&nbsp; /hari</b></h4>
            </div>
            <div class="margin-bottom-40-detail">
              <h4>Harga Sewa Setengah Hari : <b>Rp.&nbsp;{{ number_format($data->harga_sewa_setengah_hari, 0) }}&nbsp;1/2 hari</b></h4>
            </div>
            <div class="margin-bottom-40-detail">
              <h4>Deskripsi : <b>{{ $data->deskripsi }}</b></h4>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
