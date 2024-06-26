<section class="sec">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Pendidikan Kesetaraan Paket B (Setara SMP)</h1>
        <div class="list-group mb-4" data-aos="fade-up">
            <a href="{{ url('pkbm/infopendaftaran#pendaftaran-cara') }}"
                class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <i class="fas fa-tasks m-2 align-self-center"></i>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Cara Mendaftar Pendidikan Kesetaraan Paket B</h6>
                        <p class="mb-0 opacity-75">Klik di sini untuk melihat tata cara pendaftaran pendidikan
                            kesetaraan
                            paket B.</p>
                    </div>
                </div>
            </a>
            <a href="{{ url('pkbm/infopendaftaran#pendaftaran-biaya') }}"
                class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <i class="fas fa-coins m-2 align-self-center"></i>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Biaya Program Kesetaraan Paket B</h6>
                        <p class="mb-0 opacity-75">Klik di sini untuk melihat rincian biaya program pendidikan
                            kesetaraan
                            paket B.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="justify-content-center align-items-center" data-aos="fade-up">
            <h5>Jadwal Kegiatan Pembelajaran Pendiikan Kesetaraan Paket B</h5>
            <div class="my-3">
                <h6><b class="text-danger">Paket B</b> Kelas Reguler / Mandiri</h6>
                <div class="table-responsive">
                    <table class="table jadwal table-bordered table-sm border-dark">
                        <thead style="background-color: #99ffff">
                            <tr>
                                <td>Hari</td>
                                <td>Pukul</td>
                                <td>Lokasi</td>
                                <td>Materi</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Senin</td>
                                <td>13.00 - 16.00 WIB</td>
                                <td>PKBM CEMERLANG</td>
                                <td>Akademik</td>
                                <td>Offline (tatap muka)</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                                <td>13.00 - 16.00 WIB</td>
                                <td>PKBM CEMERLANG</td>
                                <td>SWBB, Penjasorkes, Keterampilan</td>
                                <td>Offline (tatap muka)</td>
                            </tr>
                            <tr>
                                <td>Jumat</td>
                                <td>09.00 - 11.00 WIB</td>
                                <td>Kediaman / Lokasi / Rumah masing-masing</td>
                                <td>Akademik</td>
                                <td>Online (seTARA daring)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="my-3">
                <h6><b class="text-danger">Paket B</b> Khusus Kelas Tahfidz Al-Quran</h6>
                <div class="table-responsive">
                    <table class="table jadwal table-bordered table-sm border-dark">
                        <thead style="background-color: #fffd99">
                            <tr>
                                <td>Hari</td>
                                <td>Pukul</td>
                                <td>Lokasi</td>
                                <td>Materi</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jumat</td>
                                <td>09.00 - 11.00 WIB</td>
                                <td>Kediaman / Lokasi / Rumah masing-masing</td>
                                <td>Akademik</td>
                                <td>Online (seTARA daring)</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>13.00 - 16.00 WIB</td>
                                <td>Rumah Tahfidz Ar-Rabwah Kejajar</td>
                                <td>Akademik</td>
                                <td>Offline (tatap muka)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="my-3">
                <h6><b class="text-danger">Paket B</b> Khusus Kelas Kolektif Desa / Organisasi</h6>
                <div class="table-responsive">
                    <table class="table jadwal table-bordered table-sm border-dark">
                        <thead style="background-color: #ffb199">
                            <tr>
                                <td>Hari</td>
                                <td>Pukul</td>
                                <td>Lokasi</td>
                                <td>Materi</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jumat</td>
                                <td>09.00 - 11.00 WIB</td>
                                <td>Kediaman / Lokasi / Rumah masing-masing</td>
                                <td>Akademik</td>
                                <td>Online (seTARA daring)</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>13.00 - 16.00 WIB</td>
                                <td>Aula Desa</td>
                                <td>Akademik</td>
                                <td>Offline (tatap muka)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec">
    <div class="container-fluid">
        <h5 data-aos="fade-up">Pembelajaran Teori Praktik</h5>
        <div class="horizontal-scroll swiper sw-dokumentasi" data-aos="fade-up">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 8; $i++) <div class="swiper-slide">
                    <a href="{{ asset('images/pkbm/kesetaraan/pktb' . $i . '.jpg') }}" data-lightbox="image-1">
                        <img class="flex-auto img-fluid rounded"
                            src="{{ asset('images/pkbm/kesetaraan/pktb' . $i . '.jpg') }}"></a></div>
            @endfor
        </div>
    </div>
    <h5 class="mt-2" data-aos="fade-up">Religi - Sosial</h5>
    <div class="row g-3" data-aos="fade-up">
        <div class="col-md-6">
            <a href="{{ asset('images/pkbm/kesetaraan/srpktb1.jpg') }}" data-lightbox="image-1">
                <img class="flex-auto img-fluid rounded" src="{{ asset('images/pkbm/kesetaraan/srpktb1.jpg') }}"></a>
        </div>
        <div class="col-md-6">
            <a href="{{ asset('images/pkbm/kesetaraan/srpktb2.jpg') }}" data-lightbox="image-1">
                <img class="flex-auto img-fluid rounded" src="{{ asset('images/pkbm/kesetaraan/srpktb2.jpg') }}"></a>
        </div>
    </div>
    <h5 class="mt-2" data-aos="fade-up">Champion Camp</h5>
    <div class="row g-3" data-aos="fade-up">
        <div class="col-md-6">
            <a href="{{ asset('images/pkbm/kesetaraan/ccpktb1.jpg') }}" data-lightbox="image-1">
                <img class="flex-auto img-fluid rounded" src="{{ asset('images/pkbm/kesetaraan/ccpktb1.jpg') }}"></a>
        </div>
        <div class="col-md-6">
            <a href="{{ asset('images/pkbm/kesetaraan/ccpktb2.jpg') }}" data-lightbox="image-1">
                <img class="flex-auto img-fluid rounded" src="{{ asset('images/pkbm/kesetaraan/ccpktb2.jpg') }}"></a>
        </div>
    </div>
    </div>
</section>