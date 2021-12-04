<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">
    <title>
        @if($site === 'pkbm')
            PKBM Cemerlang
        @else
            PT Bintang Cemerlang Jaya Sentosa
        @endif
    </title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- custom css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    {{-- Data AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    {{-- ChartJs --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
</head>

<body>
    @if($site === 'pkbm')
        {{-- header pkbm --}}
        <header>
            <div id="navheader" class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">PKBM Cemerlang</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/bintang') }}">Unit Usaha</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tentang Kami
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                                    <li><a class="dropdown-item" href="#">Legalitas & Fasilitas</a></li>
                                    <li><a class="dropdown-item" href="#">Struktur Tim</a></li>
                                    <li><a class="dropdown-item" href="#">Prestasi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/about') }}">Info
                                    Pendaftaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/contact') }}">Observasi &
                                    Studi Banding</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        {{-- endheader pkbm --}}
    @else
        {{-- header pt --}}
        <header>
            <div id="navheader" class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">PT Bintang Cemerlang Indonesia</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Unit Pendidikan<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/rooms') }}">Bisnis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/about') }}">Observasi &
                                    Studi Banding</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/contact') }}">Belanja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landing/contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        {{-- endheader pt --}}
    @endif
    
    {{-- content --}}
    @yield('content')
    {{-- endcontent --}}

    {{-- footer --}}
    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="row footer_row">
                    <div class="col-lg-4 footer_col">
                        <div class="footer_item text-center">
                            <div><i class="fas fa-phone fa-2x" style="color:white"></i></div>
                            <div class="footer_title">talk to us</div>
                            <div class="footer_list">
                                <p>(0286) 322634</p>
                                <p>081225220948</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 footer_col">
                        <div class="footer_item text-center">
                            <div><i class="far fa-envelope fa-2x" style="color:white"></i></div>
                            <div class="footer_title">e-mail</div>
                            <div class="footer_list">
                                <p>pkbmcemerlang@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 footer_col">
                        <div class="footer_item text-center">
                            <div><i class="fas fa-map-marked-alt fa-2x" style="color:white"></i></div>
                            <div class="footer_title">location</div>
                            <div class="footer_list">
                                <p>Jl. Dieng km. 4 Sibunderan rt.5 rw.4 Krasak mojotengah</p>
                                <p>56351</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bar d-flex flex-row align-items-center justify-content-center">
            <div class="copyright">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> All rights reserved | Made with <i class="fa fas-heart-o" aria-hidden="true"></i> by makrovic
            </div>
        </div>
    </footer>
    {{-- endfooter --}}

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugin/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- endscript --}}
</body>

</html>
