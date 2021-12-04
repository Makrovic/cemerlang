@extends('layout/base')
@section('content')

{{-- banner --}}
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up">
                    <div class="booking-cta">
                        <h1>PT Bintang Cemerlang Indonesia</h1>
                        <p>Pusat Pemberdayaan Masyarakat terakreditasi A terbaik di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}

{{-- section --}}
<section class="section-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
                <h1>AGORA HOTEL</h1>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>
                <button type="button" class="btn btn-primary btn-sm">Visit more</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
                <img src="../assets/4-1.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-rooms">
    <h1 class="text-center">Room's</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4" data-aos="fade-up">
                <img src="../assets/room/1.jpg" alt="..." class="img-thumbnail">
                <div class="row">
                    <div id="room-caption" class="col-sm-12 center-block text-center">
                        <span>Amarillys</span>
                        <hr>
                        <span>300$ / PER NIGHT</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4" data-aos="fade-up">
                <img src="../assets/room/2.jpg" alt="..." class="img-thumbnail">
                <div class="row">
                    <div id="room-caption" class="col-sm-12 center-block text-center">
                        <span>Dandelion</span>
                        <hr>
                        <span>450$ / PER NIGHT</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4" data-aos="fade-up">
                <img src="../assets/room/3.jpg" alt="..." class="img-thumbnail">
                <div class="row">
                    <div id="room-caption" class="col-sm-12 center-block text-center">
                        <span>Camelia</span>
                        <hr>
                        <span>450$ / PER NIGHT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="img-box">
                        <img src="../assets/testimoni/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>service was amazing.They also provide local tour and chartered couch service.Breakfast just
                            okay but judging the room with this price still consider value for money.Definitely will
                            come and stay again"</h5>
                        <p>Huda FR. - Local Tourist</p>
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="img-box">
                        <img src="../assets/testimoni/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>"good location, it's very near to supermarket (across street), near shopping mall (around
                            5-10 mins walk). The room is comfortable with good wifi. Breakfast also great, got lots of
                            variety of food, local & international."</h5>
                        <p>Faisal Makrovic - Domestic Tourist</p>
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="img-box">
                        <img src="../assets/testimoni/4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Great hotel for either business or casual stay. Staffs are very friendly and
                            knowledgeable.Excellent hotel for both foreign and domestic tourists</h5>
                        <p>Ivan Daniel - Local Tourist</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="section-location">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-6" data-aos="fade-up">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=universitas%20amikom%20yogyakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 400px;
                            width: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 400px;
                            width: 400px;
                        }

                    </style>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-6" data-aos="fade-up">
                <p><span class="d-block">Address:</span> <span> Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok,
                        Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</span></p>
                <p><span class="d-block">Phone:</span> <span> (+62) 274 884201</span></p>
                <p><span class="d-block">Email:</span> <span> info@amikom.ac.id</span></p>
            </div>
        </div>
    </div>
</section>
{{-- endsection --}}
@stop
