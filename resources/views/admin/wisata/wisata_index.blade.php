@extends('template.backend.main')
@section('main')
 <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data Wisata</h6>
           
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-success">Tambah Data</a>
           
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
   
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
         
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NAMA KATEGORI</th>              
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sungai Tanpa Daratan</td>
                
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Detail</a> <a href="#" class="btn btn-sm btn-warning">edit</a><a href="#" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


@endsection
   