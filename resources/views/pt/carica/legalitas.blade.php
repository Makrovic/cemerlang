<h1 class="title text-center">Legalitas</h1>
            <ol>
                <div class="row">
                    <div class="col-md-6">
                        <li>Tanda Daftar Perusahaan (TDP) No. 11.29.05.10.15924</li>
                        <li>Tanda Daftar Industri (TDI) No. 5003/14/XI/2015</li>
                        <li>Izin Usaha Industri (IUI) No. 503/01/IUI/III/2016</li>
                        <li>Majelis Ulama Indonesia (MUI Halal) No. 15190037200419, No. 15100072970421</li>
                        <li>Halal Assurance System Lembaga Pengkajian Pangan, Obat-obatan dan Kosmetika
                            Majelis Ulama Indonesia (HAS LPPOM - MUI) No. HAS1B2096/042019/CMR</li>

                    </div>
                    <div class="col-md-6">
                        <li>Izin Edar Badan pengawas Obat dan Makanan (BPOM) RI No. MD 217711001553</li>
                        <li>Surat Pernyataan Pengelolaan Lingkungan Hidup (SPPL) No. 660/827/SPPL/2018</li>
                        <li>GSI Barcode ISO 9001:2015 Manajemen Mutu No. CEO-SIA/07/2016/322</li>
                        <li>Nutrition Fact PT SIG (Saraswanti Indo Genetech) No. SIG.LHP.X.2019.09141710</li>
                        <li>Good Manufacturing Practice (GMP) No. 0024/LSIPB/GMP/2018</li>
                        <li>One Village One Product (OVOP) No. 780 Th 2016-2018</li>
                    </div>
                </div>
            </ol>
            <div class="horizontal-scroll swiper sw-legalitas">
                <div class="swiper-wrapper">
                    @foreach ($legalitas as $legal)
                        <div class="swiper-slide">
                            <figure class="figure">
                                <a href="{{ asset('images/pt/legalitas/'.$legal->foto.'.jpg') }}"
                                    data-lightbox="image-1">
                                    <img src="{{ asset('images/pt/legalitas/'.$legal->foto.'.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 300px"></a>
                                <figcaption class="figure-caption">{{ $legal->keterangan }}.</figcaption>
                            </figure>
                        </div>
                        @endforeach
                </div>
            </div>