@extends('admin.layouts.app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <!-- <div class="col-md-2"> -->
        <div class="button-create">
          <a href="{{ route('sewa.create') }}" class="btn btn-danger">Tambah Produk</a>
        </div>
      <!-- </div> -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Sewa Kamera</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      NAMA
                    </th>
                    <th>
                      BARANG
                    </th>
                    <th>
                      SEWA
                    </th>
                    <th>
                      TANGGAL PENGAMBILAN
                    </th>
                    <!-- <th>
                      TANGGAL PENGEMBALIAN
                    </th> -->
                    <th>
                      WAKTU PENGAMBILAN
                    </th>
                    <th>
                      ALAMAT
                    </th>
                    <!-- <th>
                      HARGA
                    </th> -->
                    <th>
                      TOTAL HARGA
                    </th>
                    <th>
                      STATUS
                    </th>
                    <th>
                      ACTION
                    </th>
                  </thead>
                  <tbody>
                  @foreach($data as $key => $row)
                    <tr>
                      <td>
                      {{ $data->firstItem() + $key}}
                      </td>
                      <td>
                      {{ $row->nama }}
                      </td>
                      <td>
                      {{ $row->nama_barang }}
                      </td>
                      <td>
                      {{ $row->lama_sewa }}
                      </td>
                      <td>
                      {{ date('d-m-Y', strtotime($row->tanggal_pengambilan)) }}
                      </td>
                      <!-- <td>
                      {{ date('d-m-Y', strtotime($row->tanggal_pengembalian)) }}
                      </td> -->
                      <td>
                      {{ $row->waktu_pengambilan }}
                      </td>
                      <td>
                      {{ $row->alamat }}
                      </td>
                      <!-- <td>
                      {{ $row->harga_sewa }}
                      </td> -->
                      <td>
                      {{ $row->total_harga }}
                      </td>
                      <td>
                      {{ $row->status }}
                      </td>
                      <td>
                      <a href="{{ route('sewa.show', $row->id) }}" class="btn btn-info btn-sm"> <i class="material-icons">visibility</i></a>
                      </td>
                      <td>
                      <a href="{{ route('sewa.edit', $row->id) }}" class="btn btn-warning btn-sm"> <i class="material-icons">create</i></a>
                      </td>
                      <td>
                        <form action="{{ route('sewa.destroy', $row->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" style="margin:5px"><i class="material-icons">delete</i></button>
                        </form>
                      <!-- <a href="#" class="btn btn-danger"> <i class="material-icons">delete</i></a> -->
                      </td>
                    </tr>
                    @endforeach
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
