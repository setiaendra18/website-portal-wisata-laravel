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
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{ $data->nama_wisata }}</h5>
                              <p class="card-text">Alamat : {{ $data->alamat }}</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
    
                        @endforeach
                    @else
                        <div class=" m-auto alert alert-primary" role="alert">
                            ;( Maaf kami belum memiliki data untuk kategori ini ..
                        </div>
                    @endempty
            </div>
        </div>
        </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection
