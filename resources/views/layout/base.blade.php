<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Makrovic">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if($unit === 'pkbm')
            PKBM Cemerlang
        @else
            PT Bintang Cemerlang Jaya Sentosa
        @endif
    </title>
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    {{-- lightbox2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- custom css --}}
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css">
    @yield('customcss')
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Data AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    {{-- ChartJs --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    {{-- poppins font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>

<body>
    <a href="#" onclick="topFunction()" id="btn-top"
        class="d-flex align-items-center justify-content-center invisible"><i class="fas fa-chevron-up"></i></a>
    @if($unit === 'pkbm')
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
    @if($unit === 'pkbm')
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
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- swiper --}}
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>

    @yield('customjs')
    {{-- endscript --}}
</body>

</html>
