@extends('admin.layouts.app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="button-create">
        <a href="{{ route('booking.create') }}" class="btn btn-danger">Booking</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Booking</h4>
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
                      NAMA BARANG
                    </th>
                    <th>
                      LAMA SEWA
                    </th>
                    <th>
                      TANGGAL SEWA
                    </th>
                    <th>
                      WAKTU PENGAMBILAN
                    </th>
                    <th>
                      ALAMAT
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
                    {{ date('d-m-Y', strtotime($row->tanggal_penyewaan)) }}
                    </td>
                    <td class="text-primary">
                    {{ $row->waktu_pengambilan }}
                    </td>
                    <td class="text-primary">
                    {{ $row->alamat }}
                    </td>
                    <td class="text-primary">
                    {{ $row->status }}
                    </td>
                    <td>
                    <a href="{{ route('booking.show', $row->id) }}" class="btn btn-info btn-sm"> <i class="material-icons">visibility</i></a>
                    </td>
                    <td>
                    <a href="{{ route('booking.edit', $row->id) }}" class="btn btn-warning btn-sm"> <i class="material-icons">create</i></a>
                    </td>
                    <td>
                      <form action="{{ route('booking.destroy', $row->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" style="margin:5px"><i class="material-icons">delete</i></button>
                      </form>
                    <!-- <a href="#" class="btn btn-danger"> <i class="material-icons">delete</i></a> -->
                    </td>
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="link-page">
      {!! $data->links() !!}
    </div>
  </div>
@endsection

