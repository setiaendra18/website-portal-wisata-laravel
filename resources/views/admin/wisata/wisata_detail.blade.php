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
                                <h3 class="mb-0">Detail Data fasilitas Wisata</h3>
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Wisata</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data_wisata->nama_wisata }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Kategori Wisata</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data_wisata->id_kategori }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Harga Tiket</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data_wisata->harga_tiket }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Alamat</label>
                                            <textarea name="alamat" rows="3" class="form-control"
                                                readonly> {{ $data_wisata->alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Kordinat Google Maps</label>
                                            <input type="text" class="form-control" value="{{ $data_wisata->gmaps }}"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Deskripsi</label>
                                            <textarea rows="4" class="form-control" readonly>
                                                    {{ $data_wisata->deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Kordinat Google Maps</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data_wisata->kontak_pengelola }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-address">Fasilitas Umum</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data_wisata->fasilitas }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    
