<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PORTAL WISATA KALBAR | ADMIN</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ url('backend/assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('backend/assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>
<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <!-- Page content -->
        <!-- Table -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <img src="{{ url('backend/assets/img/brand/brand.png') }}"
                                alt="..."></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ url('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
    <script src="{{ url('backend/assets/vendor/js-cookie/js.cookie.js') }}></script>
    <script src="{{ url('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}></script>
    <script src="{{ url('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}></script>
    <!-- Optional JS -->
    <script src="{{ url('backend/assets/vendor/chart.js/dist/Chart.min.js') }}></script>
    <script src="{{ url('backend/assets/vendor/chart.js/dist/Chart.extension.js') }}></script>
    <!-- Argon JS -->
    <script src="{{ url('backend/assets/js/argon.js?v=1.2.0') }}></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });
        });
    </script>
</body>
</html>
