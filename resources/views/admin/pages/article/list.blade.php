@extends('admin.layouts.app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="button-create">
        <a href="{{ route('article.create') }}" class="btn btn-danger">Tambah Artikel</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Artikel</h4>
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
                      JUDUL ARTIKEL
                    </th>
                    <th>
                      TANGGAL
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
                    {{ $row->judul }}
                    </td>
                    <td>
                    {{ date('d-m-Y', strtotime($row->tanggal)) }}
                    </td>
                    <td>
                    <a href="{{ route('article.show', $row->id) }}" class="btn btn-info btn-md"> <i class="material-icons">visibility</i></a>
                    </td>
                    <td>
                    <a href="{{ route('article.edit', $row->id) }}" class="btn btn-warning btn-md"> <i class="material-icons">create</i></a>
                    </td>
                    <td>
                      <form action="{{ route('article.destroy', $row->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-md" style="margin:5px"><i class="material-icons">delete</i></button>
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

