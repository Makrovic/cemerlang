<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Makrovic">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if($site === 'pkbm')
            PKBM Cemerlang
        @else
            PT Bintang Cemerlang Jaya Sentosa
        @endif
    </title>
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    {{-- lightbox2 --}}
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />
    {{-- custom css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    @yield('customcss')
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <a href="#" onclick="topFunction()" id="btn-top"
        class="d-flex align-items-center justify-content-center invisible"><i class="fas fa-chevron-up"></i></a>
    @if($site === 'pkbm')
        {{-- header pkbm --}}
        @include('layout.header-pkbm')
        {{-- endheader pkbm --}}
    @else
        {{-- header pt --}}
        @include('layout.header-pt')
        {{-- endheader pt --}}
    @endif
    {{-- content --}}
    @yield('content')
    {{-- endcontent --}}

    {{-- footer --}}
    @if($site === 'pkbm')
        {{-- header pkbm --}}
        @include('layout.footer-pkbm')
        {{-- endheader pkbm --}}
    @else
        {{-- header pt --}}
        @include('layout.footer-pt')
        {{-- endheader pt --}}
    @endif
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
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        AOS.init();

    </script>
    {{-- endscript --}}
</body>

</html>
