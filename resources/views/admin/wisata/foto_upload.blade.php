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
                                <h3 class="mb-0">UPLOAD GAMBAR</h3>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('foto-save', $data_wisata->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="pl-lg-8">
                                <div class="row">
                                    <div class="col-md-12">
                                     
                                        <div class="col-md-6">
                                            <input type="file" name="gambar" class="form-control"> <button type="submit" class="btn btn-success">Upload Gambar</button>
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

    
