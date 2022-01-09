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
                                <h3 class="mb-0">Tambah Data fasilitas Wisata</h3>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('wisata-store') }}" method="post">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Informasi Dasar Wisata</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Wisata</label>
                                            <input type="text" class="form-control" name="nama_wisata"
                                                placeholder="Masukan Nama Wisata ...." required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Kategori Wisata</label>
                                            <select class="form-control" name="id_kategori">
                                                <option value="">-- Pilih Kategori Wisata --</option>
                                                @foreach ($kategori_wisata as $data_kategori)
                                                    <option value="{{ $data_kategori->id }}">
                                                        {{ $loop->iteration }}. {{ $data_kategori->nama_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Harga Tiket</label>
                                            <input type="text" class="form-control" name="harga_tiket"
                                                placeholder="Masukan Harga Tiket ....">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Alamat</label>
                                            <textarea name="alamat" rows="3" class="form-control"
                                                placeholder="Masukan Alamat Lengkap"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Google MAPS Kordinat</label>
                                            <input type="text" class="form-control" name="gmaps"
                                                placeholder="Tempel Kordinat Maps">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Deskripsi</label>
                                            <textarea rows="4" class="form-control" name="deskripsi"
                                                placeholder="Masukan Deskripsi Wisata ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Kontak Pengelola</label>
                                            <input class="form-control" placeholder="Masukan No Telephone Pengelola"
                                                type="text" maxlength="13" name="kontak_pengelola">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-address">Fasilitas Umum</label>
                                            @foreach ($fasilitas_wisata as $data_fasilitas)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $data_fasilitas->nama_fasilitas }}" name="fasilitas[]">
                                                    <label class="form-check-label">
                                                        {{ $data_fasilitas->nama_fasilitas }}
                                                    </label>
                                                </div>
                                            @endforeach
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
