@extends('layout.base')
@section('customcss')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')

    {{-- banner --}}
    <div id="banner" class="banner">
        <div class="banner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>PKBM CEMERLANG</h1>
                            <p>Pusat pendidikan, pelatihan, pemberdayaan, dan kewirausahaan masyarakat terbaik di Indonesia.
                            </p>
                            <p>TERAKREDITASI A</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}

    {{-- section --}}
    <section class="sec back-primary">
        <div class="container">
            <div class="row d-flex flex-row-reverse justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4">
                    <img class="img-fluid rounded" src="{{ asset('images/pkbm/kesetaraan/pktb7.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center">
                    <h1>Program PKBM : </h1>
                    <ul class="fa-ul list-unstyled my-2">
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Pendidikan Kesetaraan
                            Paket B
                        </li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Pendidikan Kesetaraan
                            Paket C
                        </li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program Kuliah Kerja</li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program
                            Keterampilan / Kursus / Pelatihan
                        </li>
                        <li><span class="fa-li"><i class="bullet fas fa-check"></i></span>Program Pemberdayaan
                            Perempuan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center">
                    <h1>Proses Pembelajaran : </h1>
                    <p>PKBM CEMERLANG memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
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
