@extends('user.layouts.app')

@section('content')
  <div id="product" class="container">
  <div class="spacing-20"></div>
    <h1>Product Rental Kamera</h1>
  </div>
  <div class="spacing-20"></div>
  <div class="container">
    <div class="row">
      @foreach($data as $row)
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top" src="{{ URL::to('/') }}/images/{{ $row->gambar }}" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">
              <a href="/list-product/{{ $row->id}}">{{ $row->nama_barang }} {{ $row->tipe_barang }}</a>
              </h4>
              <div class="price_info">
                <div class="row">
                  <div class="col">
                    <p class="price">Rp.&nbsp;{{ number_format($row->harga_sewa_perhari, 0) }}&nbsp; /hari</p>
                  </div>
                  <div class="col">
                    <p class="price-1">Rp.&nbsp;{{ number_format($row->harga_sewa_setengah_hari, 0) }}&nbsp;1/2 hari</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="spacing-20"></div>
@endsection
