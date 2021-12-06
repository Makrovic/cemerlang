@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')

    {{-- banner --}}
    <div id="banner" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>PKBM Cemerlang</h1>
                            <p>Pusat Pemberdayaan Masyarakat terakreditasi A terbaik di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}

    {{-- section --}}
    <section class="home-program">
        <div class="container">
            <div class="row d-flex flex-row-reverse justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
                    <img src="../assets/4-1.jpg" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Program PKBM : </h1>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Pendidikan kesetaraan paket b</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Pendidikan kesetaraan paket c</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Program kuliah kerja</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Program Keterampilan/kursus/pelatihan
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Program Pemberdayaan Perempuan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="home-proses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
                    <canvas id="myChart" width="300px" height="300px"></canvas>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Proses Pembelajaran : </h1>
                    <p>PKMB Cermerlang memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-testimoni parallax">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <h1>Testimoni</h1>
            </div>
            <div class="row mt-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-aos="fade-up" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box">
                                <img src="../assets/testimoni/testi-mardiati.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-testi d-none d-md-block">
                                <h5>Tidak menyangka mengikuti pembelajaran di PKBM CEMERLANG begitu menyenangkan.
                                    Tutor sangat peduli pada kami, adanya layanan konseling , dharma wisata,
                                    dan di luar jam akademik kesetaraan kami dibimbing keterampilan untuk bekal kerja
                                    atau berwirausaha.PKBM CEMERLANG benar-benar mengerti apa yang kami butuhkan.</h5>
                                <p>Mardiati - Lulusan Paket B PKBM CEMERLANG</p>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box">
                                <img src="../assets/testimoni/testi-adin.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-testi d-none d-md-block">
                                <h5>Akibat salah pergaulan saya terjebak pada lingkungan yang tidak baik, saya DO dari
                                    sekolah formal, dan melanjutkan di Paket C (setara SMA) . Saya mengucapkan terima
                                    kasih
                                    pada PKBM CEMERLANG. Benar–benar memiliki rasa tanggung jawab dalam pembinaan
                                    peserta didiknya. Saya ditempatkan kerja di PT Tirta Investama (AQUA).
                                    Saya merekomendasikan kepada teman dan saudara, untuk belajar di PKBM CEMERLANG.
                                    Selain mendapatkan ijazah, saya dan rekan-rekan tidak menganggur lagi.</h5>
                                <p>Adin - Lulusan Paket C PKBM CEMERLANG</p>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box">
                                <img src="../assets/testimoni/testi-afifah.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-testi d-none d-md-block">
                                <h5>Setelah mengikuti keterampilan di PKBM CEMERLANG saya dibina untuk berwirausaha.
                                    Alhamdulilah usaha sukses, saya membuka 2 toko pusat oleh-oleh
                                    di Jl. Raya Kertek - Wonosobo.
                                    Terimakasih PKBM CEMERLANG</h5>
                                <p>Afifah - Lulusan Keterampilan PKBM CEMERLANG</p>
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
        </div>
    </section>
    {{-- endsection --}}

    {{-- script pie chart --}}
    <script>
        var data = [{
            data: [80, 90, 90, 85],
            backgroundColor: [
                "#3f51b5",
                "#9c9c00",
                "#17246e",
                "#e0e000"
            ],
            borderColor: "#fff"
        }];

        var options = {
            plugins: {
                datalabels: {
                    formatter: (value, ctx) => {
                        let percentage = value + "%";
                        return percentage;
                    },
                    color: '#fff',
                }
            }
        };

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: {
                labels: ["Praktikum", "Education", "Learning", "Motivation"],
                datasets: data
            },
            options: options
        });

    </script>
    {{-- endscript --}}
    @stop
