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
                  <h3 class="mb-0">Edit Data fasilitas Wisata</h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('fasilitas-update',$data_fasilitas->id)}}" method="post">
                @csrf
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama fasilitas Wisata</label>
                        <input type="text"  class="form-control" name="nama_fasilitas" placeholder="Masukan Nama fasilitas ...."  value="{{$data_fasilitas->nama_fasilitas}}">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary">UPDATE DATA</button>      
                </div>   
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
