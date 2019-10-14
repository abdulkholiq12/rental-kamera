@extends('admin.layouts.app')

@section('content')
<div class="card">
  <div class="row">
    <div class="col-lg-12 mt40">
      <div class="pull-left">
        <h2>Tambah Artikel</h2>
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

<form action="{{ route('article.store') }}" method="POST" name="add_note" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <strong>Judul</strong>
              <input type="text" name="judul" class="form-control" placeholder="Enter Title">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Tanggal</strong>
              <input type="date" class="form-control" col="4" name="tanggal" placeholder="Enter Description">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Deskripsi</strong>
              <textarea class="form-control" rows="5" name="deskripsi" placeholder="Enter Description"></textarea>
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
