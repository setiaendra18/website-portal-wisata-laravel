@extends('template.frontend.main')
@section('content')
    <main id="main">
        <section id="services" class="services">
            <div class="container m-t-5">
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="row mt-5 mb-5">
                    <h4>Event Wisata </h4>
                    @foreach ($data_event as $data)
                        <div class="col-sm-6">
                            <div class="card m-3">
                                <h5 class="card-header">{{ $data->nama_wisata }} : {{ $data->nama_event }} </h5>
                                <h6></h6>
                                <div class="card-body">
                                    <strong>
                                        Tanggal Mulai : {{ $data->tanggal_mulai }} - Tanggal Selesai :
                                        {{ $data->tanggal_selesai }}
                                    </strong>
                                    <hr>
                                    <p class="card-text">
                                    <p>{{ $data->keterangan }}</p>
                                    </p>
                                    <hr>
                                    <strong>
                                        <p class="mb-4">Informasi Umum :</p>
                                    </strong>
                                    <div class=row>
                                        <div class="col-sm-4">
                                            <div class="card text-white bg-primary text-center">
                                                <div class="card-body">
                                                    <h6>HTM</h6>
                                                    <h6>IDR {{ number_format($data->harga_tiket) }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card text-white bg-secondary  text-center">
                                                <div class="card-body">
                                                    <h6>KONTAK</h6>
                                                    <h6>HP : {{ $data->kontak_pengelola }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card text-white bg-success text-center">
                                                <div class="card-body">
                                                    <h6>MAPS</h6>
                                                    <a href="https://maps.google.com/?q={{ $data->gmaps }}" target=_blank class="text-white">Klik disini</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
