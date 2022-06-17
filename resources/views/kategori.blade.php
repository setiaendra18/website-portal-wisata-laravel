@extends('template.frontend.main')
@section('content')
    <main id="main">
        <!-- ======= About Section ======= -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container m-t-5">
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="row mt-5 mb-5">
                    <h4>Kategori Wisata : {{ $data_kategori_id->nama_kategori }}</h4>
                   
                    @if ($wisata->count() > 0)
                        @foreach ($wisata as $data)
                        @php
                        $cek_foto = DB::table('galeri')
                            ->where('id_wisata', '=', $data->id)
                    ->get();
                
                $gambar = DB::table('galeri')
                            ->where('id_wisata', '=', $data->id)
                            ->first();
                    @endphp
                            <div class="col-sm-4 mt-4">
                                <div class="card">
                                   
                                    @if ($cek_foto->isEmpty())
                                    <img src="{{ url('assets/img/no_image.jpg') }}" alt="" class="img-fluid">
                                    @else
                                        <img src="{{ asset('img/galeri/' . $gambar->nama_gambar) }}"
                                             title="" alt="" class="img-fluid">
                                    @endif
                                    
                                    <div class="card-body">
                                        
                                        <h5 class="card-title">{{ $data->nama_wisata }}</h5>
                                        <p class="card-text">Alamat : {{ $data->alamat }}</p>
                                        <a href="{{ route('wisata-detail', $data->id) }}" class="btn btn-primary">
                                            Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class=" m-auto alert alert-primary text-center" role="alert">
                            <h5>;( Maaf kami belum memiliki data untuk kategori ini ..</h5>
                        </div>
                    @endempty
            </div>
        </div>
        </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection
