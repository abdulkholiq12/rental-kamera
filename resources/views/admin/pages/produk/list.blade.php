@extends('admin.layouts.app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="button-create">
        <a href="{{ route('product.create') }}" class="btn btn-danger">Tambah Produk</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Produk Kamera</h4>
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
                      NAMA BARANG
                    </th>
                    <th>
                      TIPE BARANG
                    </th>
                    <th>
                      HARGA SEWA PERHARI
                    </th>
                    <th>
                      HARGA SEWA 1/2 HARI
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
                    {{ $row->nama_barang }}
                    </td>
                    <td>
                    {{ $row->tipe_barang }}
                    </td>
                    <td>
                    {{ $row->harga_sewa_perhari }}/hari
                    </td>
                    <td class="text-primary">
                    {{ $row->harga_sewa_setengah_hari }} 1/2hari
                    </td>
                    <td>
                    <a href="{{ route('product.show', $row->id) }}" class="btn btn-info btn-sm"> <i class="material-icons">visibility</i></a>
                    </td>
                    <td>
                    <a href="{{ route('product.edit', $row->id) }}" class="btn btn-warning btn-sm"> <i class="material-icons">create</i></a>
                    </td>
                    <td>
                      <form action="{{ route('product.destroy', $row->id)}}" method="post">
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

