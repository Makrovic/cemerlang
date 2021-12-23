<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Ekspansi Pemasaran & Jaringan Kemitraan</h1>
        <h5>PT. Indomarco Prismatama Tbk.</h5>
        <div class="row mb-4" data-aos="fade-up">
            <div class="col-4">
                <figure class="figure">
                    <a href="{{ asset('images/pt/ekspansi/indomarco1.jpg') }}"
                        data-lightbox="image-1">
                        <img src="{{ asset('images/pt/ekspansi/indomarco1.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
                    <figcaption class="figure-caption text-center">Penandatanganan MoU PKBM Cemerlang dengan PT Indomarco</figcaption>
                </figure>
            </div>
            <div class="col-4">
                <figure class="figure">
                    <a href="{{ asset('images/pt/ekspansi/indomarco2.jpg') }}"
                        data-lightbox="image-1">
                        <img src="{{ asset('images/pt/ekspansi/indomarco2.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
                    <figcaption class="figure-caption text-center">Pengiriman Carica Cemerlang ke Gudang Perisable Produk Lokal PT Indomarco Sentul - Bogor</figcaption>
                </figure>
            </div>
            <div class="col-4">
                <figure class="figure">
                    <a href="{{ asset('images/pt/ekspansi/indomarco3.jpg') }}"
                        data-lightbox="image-1">
                        <img src="{{ asset('images/pt/ekspansi/indomarco3.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
                    <figcaption class="figure-caption text-center">Pengiriman Carica Cemerlang ke Gudang Perisable Produk Lokal PT Indomarco Kawasan Industri Tugu Randugarut - Semarang</figcaption>
                </figure>
            </div>
        </div>
        <h5>Superindo</h5>
        <div class="row mb-4" data-aos="fade-up">
            @for ($i = 1; $i <= 3; $i++)
            <div class="col-4">
                    <a href="{{ asset('images/pt/ekspansi/superindo'.$i.'.jpg') }}"
                        data-lightbox="image-2">
                        <img src="{{ asset('images/pt/ekspansi/superindo'.$i.'.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
            </div>
            @endfor
        </div>
        <h5>Carrefour</h5>
        <div class="row mb-4" data-aos="fade-up">
            @for ($i = 1; $i <= 2; $i++)
            <div class="col-6">
                    <a href="{{ asset('images/pt/ekspansi/carrefour'.$i.'.jpg') }}"
                        data-lightbox="image-3">
                        <img src="{{ asset('images/pt/ekspansi/carrefour'.$i.'.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
            </div>
            @endfor
        </div>
    </div>
</section>