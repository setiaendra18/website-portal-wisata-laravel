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
                  <h3 class="mb-0">Tambah Data event Wisata</h3>
                </div>
                <div class="col-4 text-right">
                  
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('event-store')}}" method="post">
                @csrf
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Wisata</label>
                        
                        <select class="form-control" name="id_wisata">
                            <option value="">-- Pilih Kategori Wisata --</option>
                            @foreach ($wisata as $data_wisata)
                                <option value="{{ $data_wisata->id }}">
                                    {{ $data_wisata->nama_wisata }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama event Wisata</label>
                        <input type="text" class="form-control" name="nama_event" placeholder="Masukan Nama event ...." required>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai" required>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_selesai" required>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Keterangan</label>
                        <textarea name="keterangan" rows="3" class="form-control"
                            placeholder="Masukan Keterangan Lengkap"></textarea>
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
   