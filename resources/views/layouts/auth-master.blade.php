<!doctype html>
<html lang="en" data-assets-path="{{ url('') . '/assets/' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | SIM Keuangan Paki</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    @yield('style')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper bg-dark" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
        data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card bg-dark mb-0">
                            <div class="card-body">
                                <a href="{{ url('/login') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    {{-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt=""> --}}
                                    <h3 class="text-title text-light m-0">SIM Keuangan</h3>
                                </a>
                                <p class="text-center text-light">Input username dan password Anda</p>
                                @if (session()->has('SUCCESS'))
                                    <div class="alert alert-success" role="alert">{{ session('SUCCESS') }}</div>
                                @endif

                                @if (session()->has('ERROR'))
                                    <div class="alert alert-warning" role="alert">{{ session('ERROR') }}</div>
                                @endif
                                <!-- Container Start -->
                                @yield('container')
                                <!-- Container End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>

</html>
