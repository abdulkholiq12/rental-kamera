@extends('admin.layouts.app')

@section('content')
<!-- <div  class="spacing-20"></div> -->
  <div class="container">
    <div class="card">
      <div class="padding-10">
        <h3>Detail Produk {{ $data->nama_barang }}</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
      <div class="row">
        <div class="col">
          <!-- <div class="padding-20"> -->
            <img src="{{ URL::to('/') }}/images/{{ $data->gambar }}" class="img-thumbnail"/>
          <!-- </div> -->
        </div>
        <div class="col">
          <div class="padding-10">
            <div class="margin-bottom-40">
              <h4>Nama Barang : {{ $data->nama_barang }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Tipe Barang : {{ $data->tipe_barang }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Harga Sewa Perhari/24jam : {{ $data->harga_sewa_perhari }}/hari</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Harga Sewa Setengah Hari : {{ $data->harga_sewa_setengah_hari }} 1/2hari</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Deskripsi : {{ $data->deskripsi }}</h4>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <a href="{{ route('product.edit', $data->id)}}"><button type="submit" class="btn btn-warning"><i class="material-icons">create</i>&nbsp;Update</button></a>
                <a href="{{ route ('product.index')}}"><button type="submit" class="btn btn-dark"><i class="material-icons">close</i>&nbsp;Cancel</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
