@extends('admin.layouts.app')

@section('content')
<!-- <div  class="spacing-20"></div> -->
  <div class="container">
    <div class="card">
      <div class="padding-10">
        <h3>Article {{ $data->judul }}</h3>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
      <div class="row">
        <div class="col">
          <div class="padding-10">
            <div class="margin-bottom-40">
              <h4>Judul : {{ $data->judul }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Tanggal : {{ date('d-m-Y', strtotime($data->tanggal)) }}</h4>
            </div>
            <div class="margin-bottom-40">
              <h4>Deskripsi : {{ $data->deskripsi }}</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <a href="{{ route('article.edit', $data->id)}}"><button type="submit" class="btn btn-warning"><i class="material-icons">create</i>&nbsp;Update</button></a>
            <a href="{{ route ('article.index')}}"><button type="submit" class="btn btn-dark"><i class="material-icons">close</i>&nbsp;Cancel</button></a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
