@extends('admin.layouts.app')

@section('content')
  <div class="content">
    <div class="container-fluid">
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
                  <tr>
                    <td>
                    1
                    </td>
                    <td>
                    Canon
                    </td>
                    <td>
                    1200D
                    </td>
                    <td>
                      130.000/hari
                    </td>
                    <td class="text-primary">
                      90.000 1/2hari
                    </td>
                  </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        Minerva Hooper
                      </td>
                      <td>
                        Curaçao
                      </td>
                      <td>
                        Sinaai-Waas
                      </td>
                      <td class="text-primary">
                        $23,789
                      </td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        Sage Rodriguez
                      </td>
                      <td>
                        Netherlands
                      </td>
                      <td>
                        Baileux
                      </td>
                      <td class="text-primary">
                        $56,142
                      </td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                        Philip Chaney
                      </td>
                      <td>
                        Korea, South
                      </td>
                      <td>
                        Overland Park
                      </td>
                      <td class="text-primary">
                        $38,735
                      </td>
                    </tr>
                    <tr>
                      <td>
                        5
                      </td>
                      <td>
                        Doris Greene
                      </td>
                      <td>
                        Malawi
                      </td>
                      <td>
                        Feldkirchen in Kärnten
                      </td>
                      <td class="text-primary">
                        $63,542
                      </td>
                    </tr>
                    <tr>
                      <td>
                        6
                      </td>
                      <td>
                        Mason Porter
                      </td>
                      <td>
                        Chile
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-primary">
                        $78,615
                      </td>
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

