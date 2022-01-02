@extends('template.backend.main')
@section('main')
 <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              
           
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
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Tambah Data Kategori Wisata</h3>
                </div>
                <div class="col-4 text-right">
                  
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('kategori-store')}}" method="post">
                @csrf
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Kategori Wisata</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori ...." required>
                      </div>
                    </div>
                    
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary">SIMPAN DATA</button>      
                </div>   
              </form>
            </div>
          </div>
        </div>

      </div>


@endsection
   