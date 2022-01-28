@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
{{-- banner --}}
<div id="banner" class="banner2">
    <div class="banner-hero">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5" data-aos="fade-up">
                    <div class="banner-title">
                        <h1>Informasi Pendaftaran</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
<section class="sec" id="pendaftaran-cara">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Cara mendaftar Program Pendidikan Kesetaraan</h1>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card card-b my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        Paket B
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cara mendaftar Kelas Baru: </h5>
                        <ol>
                            <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                            <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                            </li>
                            <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                <ul>
                                    <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                            class="badge bg-primary">background biru</span>.<br>
                                        Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                    <li>FC legalisir ijazah dan <b>SKHUN SD/MI/Paket A</b> (3 lembar)</li>
                                    <li>FC legalisir akta kelahiran (3 lembar)</li>
                                    <li>FC kartu keluarga (3 lembar)</li>
                                    <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                </ul>
                            </li>
                        </ol>
                        <h5 class="card-title">Cara mendaftar Kelas Lanjutan / Pindahan : </h5>
                        <ol>
                            <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                            <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                            </li>
                            <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                <ul>
                                    <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                            class="badge bg-primary">background biru</span>.<br>
                                        Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                    <li>FC legalisir ijazah dan <b>SKHUN SD/MI/Paket A</b> (3 lembar)</li>
                                    <li>FC legalisir akta kelahiran (3 lembar)</li>
                                    <li>FC kartu keluarga (3 lembar)</li>
                                    <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                </ul>
                            <li>Raport SMP/MTs/Setara untuk Pendaftar Pindahan atau Kelas Lanjutan
                                <ul>
                                    <li>Raport kelas 1 dari sekolah sebelumnya untuk mendaftar di kelas 2</li>
                                    <li>Raport kelas 1 dan 2 dari sekolah sebelumnya untuk mendaftar di kelas 3</li>
                                </ul>
                            </li>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card card-c my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        Paket C
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cara mendaftar Kelas Baru : </h5>
                        <ol>
                            <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                            <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                            </li>
                            <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                <ul>
                                    <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                            class="badge bg-warning">background kuning</span>.<br>
                                        Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                    <li>FC legalisir ijazah dan <b>SKHUN SMP/MTs/Paket B/setara</b> (3 lembar)</li>
                                    <li>FC legalisir akta kelahiran (3 lembar)</li>
                                    <li>FC kartu keluarga (3 lembar)</li>
                                    <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                </ul>
                            </li>
                        </ol>
                        <h5 class="card-title">Cara mendaftar Kelas Lanjutan / Pindahan : </h5>
                        <ol>
                            <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                            <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                            </li>
                            <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                <ul>
                                    <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                            class="badge bg-warning">background kuning</span>.<br>
                                        Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                    <li>FC legalisir ijazah dan <b>SKHUN SMP/MTs/Paket B/setara</b> (3 lembar)</li>
                                    <li>FC legalisir akta kelahiran (3 lembar)</li>
                                    <li>FC kartu keluarga (3 lembar)</li>
                                    <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                </ul>
                            </li>
                            <li>Raport SMP/MTs/Setara untuk Pendaftar Pindahan atau Kelas Lanjutan
                                <ul>
                                    <li>Raport kelas 1 dari sekolah sebelumnya untuk mendaftar di kelas 2</li>
                                    <li>Raport kelas 1 dan 2 dari sekolah sebelumnya untuk mendaftar di kelas 3</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec back-gray">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Jangka Waktu Pendidikan Paket B & Paket C</h1>
        <div data-aos="fade-up">
            <h5>Berapa Lama Jangka Waktu Proses Pendidikan Paket B & C?</h5>
            <p>Jawaban : 3 Tahun</p>
            <h5>Apakah jangka waktu pendikan bisa dipercepat?</h5>
            <p>Jawaban : Bisa dipercepat khusus untuk pindahan / drop out (DO)
                <li>melampirkan raport kelas 1 untuk masuk di kelas 2, jadi lama pendidikan selama 2 tahun</li>
                <li>melampirkan raport kelas 1 dan 2 untuk masuk di kelas 3, jadi lama pendidikan selama 1 tahun
                </li>
            </p>
        </div>

    </div>
</section>
<section class="sec back-gray">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Proses Pembelajaran Paket B & Paket C</h1>
        <div data-aos="fade-up">
            <h5>Bagaimana proses pembelajarannya?</h5>
            <p>Jawaban : <br>Proses pembelajaran dilaksanakan secara online (daring) dan offline (tatap muka
                langsung).
                Dengan demikian peserta didik lebih leluasa bebas memilih sesuai kenyamanan masing-masing.
                Sehingga untuk peserta didik yang berada di luar kota atau sibuk bekerja tidak perlu khawatir karena
                tetap dapat
                mengikuti peroses pembelajaran secara online (daring).
        </div>
        </p>
    </div>
</section>
<section class="sec" id="pendaftaran-biaya">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Biaya Program Pendidikan Kesetaraan</h1>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card card-b my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        Paket B
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Biaya Pendidikan Kesetaraan Paket B Reguler/Mandiri : </h5>
                        <p>Biaya Pendidikan untuk Paket B Regular/Mandiri yaitu <b>Rp.3.000.000,-</b> per tahun,
                            dimana biaya operasional penyelenggaraannya dibantu oleh Pemerintah melalui BOP Paket B
                            sebesar <b>Rp. 1.500.000,-</b> per tahun.<br>
                            Dengan demikian, peserta didik hanya membayar swadaya sisanya sebesar
                            <b>Rp.1.500.000,-</b>
                            per tahun yang dapat dibayarkan secara bertahap atau diangsur setiap bulannya sejumlah
                            <b>Rp. 125.000,-</b> per bulan.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-primary align-middle">
                                    <tr>
                                        <td>Total biaya operasional penyelenggaraan pendidikan kesetaraan Paket B
                                            per
                                            peserta didik</td>
                                        <td>Pendanaan dibantu pemerintah melalui BOP Paket</td>
                                        <td>Swadaya Mandiri Peserta</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp.3.000.000,-/Tahun</td>
                                        <td>Rp.1.500.000,-/Tahun</td>
                                        <td>Rp.1.500.000,-/Tahun
                                            <hr>(dapat diangsur Rp.125.000,- dibayarkan maksimal tanggal 20 setiap
                                            bulannya
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h5 class="card-title">Biaya Pendidikan Kesetaraan Paket B Reguler/Mandiri : </h5>
                        <p>Biaya Pendidikan untuk paket B Kolekstif dari Desa / Kelurahan yaitu sebesar <b>Rp.
                                3.000.000,-</b> per tahun, dimana Operasional Penyelenggaraannya dibantu oleh
                            Pemerintah melaui BOP Paket B sebesar <b>Rp. 1.500.000,-</b> per tahun dan Swadaya
                            Mandiri Lembaga yang besumber dari Keuntungan Unit Usaha Lembaga sebesar <b>Rp.
                                500.000,-</b>
                            Dengan demikian, Pemerintah Desa / Kelurahan hanya membayar Swadaya sisanya melalui
                            Alokasi Dana Desa
                            (ADD) sebesar <b>Rp. 1.000.000,-</b> per tahun.</p>
                        <p class="fw-bold text-danger">Peserta Didik Gratis, tidak membayar biaya apapun, karena
                            telah dibayarkan dari Pemerintah Desa / Kelurahan.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-primary align-middle">
                                    <tr>
                                        <td>No</td>
                                        <td>Rincian Biaya</td>
                                        <td>Rp</td>
                                        <td>Sumber Biaya</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Biaya Operasional Penyelenggaraan Pendidikan per peserta didik</td>
                                        <td>1.500.000,-</td>
                                        <td>BOP Paket B</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pembangunan Prasaran Pendiidkan <br>(gedung/ruang pembelajaran)</td>
                                        <td>500.000,-</td>
                                        <td>Swadaya Mandiri Lembaga yang bersumber dari keuntungan unit usaha lembaga
                                            <br>(carica cemerlang
                                        </td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>3</td>
                                        <td>Iuran Sarana Prasarana (ISP) Paket B untuk 1 tahun</td>
                                        <td>1.000.000,-</td>
                                        <td>Pemerintah desa melalui Alokasi Dana Desa (ADD)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Total Biaya Pendidikan Paket B untuk 1 tahun pembelajaran per
                                            peserta didik
                                        </td>
                                        <td>3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-primary fw-bold">Apakah ada biaya lain selain biaya tersebut?</p>
                        <p>Jawaban : <b>Tidak Ada</b><br>
                        <div class="row">
                            <div class="col-auto">Pendaftaran <br>
                                Praktik Keterampilan <br>
                                Tes Semester <br>
                                Ujian Akhir Nasional <br>
                                Ijazah</div>
                            <div class="col-auto">
                                <span class="badge bg-primary">GRATIS</span><br>
                                <span class="badge bg-primary">GRATIS</span><br>
                                <span class="badge bg-primary">GRATIS</span><br>
                                <span class="badge bg-primary">GRATIS</span><br>
                                <span class="badge bg-primary">GRATIS</span>
                            </div>
                        </div>
                        </p>
                        <p class="text-primary fw-bold">Fasilitas apa yang didapatkan dari Layanan Pendidikan
                            Kesetaraan Paket B teesebut?</p>
                        <ol>
                            <li>Peserta Didik mendapatkan Materi Akademik baik secara online maupun offline.</li>
                            <li>Peserta Didik mendapatkan Materi Keterapilan baik teori maupun praktik langsung.
                            </li>
                            <li>Memanfaatkan Laboratorium Komputer sebagai pendukung pembelajaran.</li>
                            <li>Kegiatan pendukung lainnya : Saka Widya Budaya Bhakti (SWBB) dan Penjasorkes</li>
                            <li>Pendampingan Pasca Pembelajaran
                                <ul>
                                    <li>Melanjutkan ke SMA / Paket C</li>
                                    <li>Pendampingan Wirausaha Mandiri</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card card-c my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        Paket C
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Biaya Pendidikan Kesetaraan Paket C Reguler/Mandiri : </h5>
                        <p>Biaya Pendidikan untuk Paket C Regular/Mandiri yaitu <b>Rp.3.600.000,-</b> per tahun,
                            dimana biaya operasional penyelenggaraannya dibantu oleh Pemerintah melalui BOP Paket C
                            sebesar <b>Rp. 1.800.000,-</b> per tahun.<br>
                            Dengan demikian, peserta didik hanya membayar swadaya sisanya sebesar
                            <b>Rp.1.800.000,-</b>
                            per tahun yang dapat dibayarkan secara bertahap atau diangsur setiap bulannya sejumlah
                            <b>Rp. 150.000,-</b> per bulan.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-warning align-middle">
                                    <tr>
                                        <td>Total biaya operasional penyelenggaraan pendidikan kesetaraan Paket C
                                            per
                                            peserta didik</td>
                                        <td>Pendanaan dibantu pemerintah melalui BOP Paket</td>
                                        <td>Swadaya Mandiri Peserta</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp.3.600.000,-/Tahun</td>
                                        <td>Rp.1.800.000,-/Tahun</td>
                                        <td>Rp.1.800.000,-/Tahun
                                            <hr>(dapat diangsur Rp.150.000,- dibayarkan maksimal tanggal 20 setiap
                                            bulannya
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h5 class="card-title">Biaya Pendidikan Kesetaraan Paket C Reguler/Mandiri : </h5>
                        <p>Biaya Pendidikan untuk Paket C Kolekstif dari Desa / Kelurahan yaitu sebesar <b>Rp.
                                3.600.000,-</b> per tahun, dimana Operasional Penyelenggaraannya dibantu oleh
                            Pemerintah melaui BOP Paket C sebesar <b>Rp. 1.800.000,-</b> per tahun dan Swadaya
                            Mandiri Lembaga yang besumber dari Keuntungan Unit Usaha Lembaga sebesar <b>Rp.
                                800.000,-</b>
                            Dengan demikian, Pemerintah Desa / Kelurahan hanya membayar Swadaya sisanya melalui
                            Alokasi Dana Desa
                            (ADD) sebesar <b>Rp. 1.000.000,-</b> per tahun.</p>
                        <p class="fw-bold text-danger">Peserta Didik Gratis, tidak membayar biaya apapun, karena
                            telah dibayarkan dari Pemerintah Desa / Kelurahan.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-warning align-middle">
                                    <tr>
                                        <td>No</td>
                                        <td>Rincian Biaya</td>
                                        <td>Rp</td>
                                        <td>Sumber Biaya</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Biaya Operasional Penyelenggaraan Pendidikan per peserta didik</td>
                                        <td>1.800.000,-</td>
                                        <td>BOP Paket C</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pembangunan Prasaran Pendiidkan <br>(gedung/ruang pembelajaran)</td>
                                        <td>800.000,-</td>
                                        <td>Swadaya Mandiri Lembaga yang bersumber dari keuntungan unit usaha
                                            lembaga
                                            <br>(carica cemerlang
                                        </td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>3</td>
                                        <td>Iuran Sarana Prasarana (ISP) Paket C untuk 1 tahun</td>
                                        <td>1.000.000,-</td>
                                        <td>Pemerintah desa melalui Alokasi Dana Desa (ADD)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Total Biaya Pendidikan Paket C untuk 1 tahun pembelajaran
                                            per
                                            peserta didik
                                        </td>
                                        <td>3.600.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-warning fw-bold">Apakah ada biaya lain selain biaya tersebut?</p>
                        <p>Jawaban : <b>Tidak Ada</b><br>
                        <div class="row">
                            <div class="col-auto">Pendaftaran <br>
                                Praktik Keterampilan <br>
                                Tes Semester <br>
                                Ujian Akhir Nasional <br>
                                Ijazah</div>
                            <div class="col-auto">
                                <span class="badge bg-warning">GRATIS</span><br>
                                <span class="badge bg-warning">GRATIS</span><br>
                                <span class="badge bg-warning">GRATIS</span><br>
                                <span class="badge bg-warning">GRATIS</span><br>
                                <span class="badge bg-warning">GRATIS</span>
                            </div>
                        </div>
                        </p>
                        <p class="text-warning fw-bold">Fasilitas apa yang didapatkan dari Layanan Pendidikan
                            Kesetaraan Paket C tersebut?</p>
                        <ol>
                            <li>Peserta Didik mendapatkan Materi Akademik baik secara online maupun offline.</li>
                            <li>Peserta Didik mendapatkan Materi Keterapilan baik teori maupun praktik langsung.
                            </li>
                            <li>Memanfaatkan Laboratorium Komputer sebagai pendukung pembelajaran.</li>
                            <li>Kegiatan pendukung lainnya : Saka Widya Budaya Bhakti (SWBB) dan Penjasorkes</li>
                            <li>Pendampingan Pasca Pembelajaran
                                <ul>
                                    <li>Melanjutkan Kuliah (perguruan tinggi)</li>
                                    <li>Pendampingan Program Kuliah & Kerja</li>
                                    <li>Penempatan Kerja</li>
                                    <li>Pendampingan Wirausaha mandiri</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop