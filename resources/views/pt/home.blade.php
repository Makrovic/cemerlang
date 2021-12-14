@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/home-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')

    {{-- banner --}}
    <div id="banner" class="banner">
        <div class="banner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>PT Bintang Cemerlang Jaya Sentosa</h1>
                            <p>bintang cemerlang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}

    {{-- section --}}
    <section class="sec back-primaryc">
        <div class="container">
            <div class="row d-flex flex-row-reverse justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4" data-aos="fade-left">
                    <img class="img-fluid rounded" src="{{asset('images/pkbm/pktb4.jpg')}}" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Program PKBM : </h1>
                    <ul class="fa-ul list-unstyled my-2">
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Pendidikan kesetaraan paket b</li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Pendidikan kesetaraan paket c</li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program kuliah kerja</li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program Keterampilan/kursus/pelatihan
                        </li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program Pemberdayaan Perempuan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4" data-aos="fade-right">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Proses Pembelajaran : </h1>
                    <p>PKMB Cermerlang memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec back-gray">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <h1>Testimoni</h1>
            </div>
            <div class="row mt-5">
                <div class="swiper sw-testi" data-aos="fade-up">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="img-box">
                            <img src="../assets/testimoni/testi-adin.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="text-center">
                            <p class="fst-italic">Akibat salah pergaulan saya terjebak pada lingkungan yang tidak baik, saya DO dari
                                sekolah formal, dan melanjutkan di Paket C (setara SMA) . Saya mengucapkan terima
                                kasih
                                pada PKBM CEMERLANG. Benar benar memiliki rasa tanggung jawab dalam pembinaan
                                peserta didiknya. Saya ditempatkan kerja di PT Tirta Investama (AQUA).
                                Saya merekomendasikan kepada teman dan saudara, untuk belajar di PKBM CEMERLANG.
                                Selain mendapatkan ijazah, saya dan rekan-rekan tidak menganggur lagi.</p>
                            <p class="fw-bold">Adin - Lulusan Paket C PKBM CEMERLANG</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="img-box">
                            <img src="../assets/testimoni/testi-mardiati.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="text-center">
                            <p class="fst-italic">Tidak menyangka mengikuti pembelajaran di PKBM CEMERLANG begitu menyenangkan.
                                Tutor sangat peduli pada kami, adanya layanan konseling , dharma wisata,
                                dan di luar jam akademik kesetaraan kami dibimbing keterampilan untuk bekal kerja
                                atau berwirausaha.PKBM CEMERLANG benar-benar mengerti apa yang kami butuhkan.</p>
                            <p class="fw-bold">Mardiati - Lulusan Paket B PKBM CEMERLANG</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="img-box">
                            <img src="../assets/testimoni/testi-afifah.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="text-center">
                            <p class="fst-italic">Setelah mengikuti keterampilan di PKBM CEMERLANG saya dibina untuk berwirausaha.
                                Alhamdulilah usaha sukses, saya membuka 2 toko pusat oleh-oleh
                                di Jl. Raya Kertek - Wonosobo.
                                Terimakasih PKBM CEMERLANG</p>
                            <p class="fw-bold">Afifah - Lulusan Keterampilan PKBM CEMERLANG</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
            responsive: true,
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
