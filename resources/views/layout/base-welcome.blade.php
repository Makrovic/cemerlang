<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Scotch">
<title>Bintang Cemerlang Indonesia</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<!-- Datapicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
{{-- Icon --}}
<link href="//https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{{-- Data AOS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
</head>
<body>
    @yield('content')
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
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fas-heart-o" aria-hidden="true"></i> by makrovic
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
        </div>
    </footer>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugin/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();

</script>
</body>
</html>