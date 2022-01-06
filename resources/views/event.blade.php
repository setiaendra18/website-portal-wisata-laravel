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
              <h5 class="card-header">{{$data->nama_event}}</h5>
              <h6></h6>
              <div class="card-body">
                Tanggal Mulai : {{$data->tanggal_mulai}} - Tanggal Selesai : {{$data->tanggal_selesai}}
                <hr>
              
                <p class="card-text"><p>{{$data->keterangan}}</p></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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