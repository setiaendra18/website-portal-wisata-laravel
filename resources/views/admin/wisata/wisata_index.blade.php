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
                        <a href="{{ route('add-wisata') }}" class="btn btn-sm btn-success">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                @if (session('success'))
                    <div class="alert alert-success ">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th>FOTO</th>
                                    <th scope="col">NAMA WISATA</th>
                                    <th scope="col">HTM</th>
                                    <th scope="col">KONTAK PENGELOLA</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_wisata as $data)
                                    @php
                                        $cek_foto = DB::table('galeri')
                                            ->where('id_wisata', '=', $data->id)
                                    ->get();
                                
                                $gambar = DB::table('galeri')
                                            ->where('id_wisata', '=', $data->id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            @if ($cek_foto->isEmpty())
                                                {{ 'Gambar Kosong' }}
                                            @else
                                                <img src="{{ asset('img/galeri/' . $gambar->nama_gambar) }}" alt=""
                                                    title="" width="30%">
                                            @endif

                                        </td>
                                        <td>{{ $data->nama_wisata }}</td>
                                        <td>Rp.{{ number_format($data->harga_tiket) }}</td>
                                        <td>{{ $data->kontak_pengelola }}</td>
                                        <td>



                                            {{ $data->nama_gambar }}
                                            @if ($cek_foto->isEmpty())
                                                <a href="{{ route('foto-upload', $data->id) }}"
                                                    class="btn btn-sm btn-info">Upload Gambar</a>
                                            @else
                                                <a href="{{ route('foto-edit', $data->id) }}"
                                                    class="btn btn-sm btn-dark">Edit Gambar</a>
                                                    <a href="{{ route('foto-hapus', $gambar->id) }}"
                                                        class="btn btn-danger btn-sm">hapus gambar</a>
                                            @endif
                                            <a href="{{ route('detail-wisata', $data->id) }}"
                                                class="btn btn-sm btn-primary">Detail</a>
                                            <a href="{{ route('edit-wisata', $data->id) }}"
                                                class="btn btn-sm btn-warning">edit</a>
                                            <a href="{{ route('delete-wisata', $data->id) }}"
                                                class="btn btn-sm btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
