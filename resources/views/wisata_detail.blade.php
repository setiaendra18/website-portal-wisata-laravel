@extends('template.frontend.main')
@section('content')
    <main id="main">
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 mt-5 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                @php
                                    $cek_foto = DB::table('galeri')
                                        ->where('id_wisata', '=', $data_wisata->id)
                    ->get();
                
                $gambar = DB::table('galeri')
                                        ->where('id_wisata', '=', $data_wisata->id)
                                        ->first();
                                @endphp
                                @if ($cek_foto->isEmpty())
                                    <img src="{{ url('assets/img/no_image.jpg') }}" alt="" class="img-fluid">
                                @else
                                    <img src="{{ asset('img/galeri/' . $gambar->nama_gambar) }}" title=""
                                        alt="" class="img-fluid">
                                @endif
                            </div>
                            <h2 class="entry-title">
                                {{ $data_wisata->nama_wisata }}
                            </h2>
                            <hr>
                            <div class="entry-content">
                                <p>
                                    {{ $data_wisata->deskripsi }}
                                </p>
                                <hr>
                                <h3>Fasilitas Umum :</h3>
                                {{ $data_wisata->fasilitas }}


                                <hr>
                                <h3 class="mb-4">Harga Tiket :</h3>
                                <div class=row>
                                    <div class="col-sm-2">
                                        <div class="card border-primary text-center">
                                            <div class="card-body">
                                                <h4>HTM</h4>
                                                <h6>IDR {{ number_format($data_wisata->harga_tiket) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="card border-primary text-center">
                                            <div class="card-body">
                                                <h4>KONTAK</h4>
                                                <h6>{{ $data_wisata->kontak_pengelola }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="card border-primary text-center">
                                            <div class="card-body">
                                                <h4>MAPS</h4>
                                                <a href="https://maps.google.com/?q={{ $data_wisata->gmaps }}"
                                                    target=_blank>Klik disini</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </article><!-- End blog entry -->
                    </div><!-- End blog comments -->
                </div><!-- End blog entries list -->
            </div>
            </div>
        </section><!-- End Blog Single Section -->
    </main><!-- End #main -->
@endsection
