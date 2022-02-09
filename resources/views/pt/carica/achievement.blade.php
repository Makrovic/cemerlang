<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Event Pencapaian</h1>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12 col-md-6">
                <div class="swiper sw-oneslide">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 2; $i++)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <a href="{{ asset('images/pt/event/ovop' . $i . '.jpg') }}" data-lightbox="image-1">
                                    <img src="{{ asset('images/pt/event/ovop' . $i . '.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>

                            </div>
                        @endfor
                    </div>
                </div>
                <p>OVOP</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="swiper sw-oneslide">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <a href="{{ asset('images/pt/event/tradeexport' . $i . '.jpg') }}"
                                    data-lightbox="image-2">
                                    <img src="{{ asset('images/pt/event/tradeexport' . $i . '.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>

                            </div>
                        @endfor
                    </div>
                </div>
                <p>Trade Export</p>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12 col-md-6">
                <div class="swiper sw-oneslide">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <a href="{{ asset('images/pt/event/jemputrezeki' . $i . '.jpg') }}"
                                    data-lightbox="image-3">
                                    <img src="{{ asset('images/pt/event/jemputrezeki' . $i . '.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>

                            </div>
                        @endfor
                    </div>
                </div>
                <p><a href="https://youtu.be/IxXHj_9hke8" target="_blank">Program Jemput Rezeki ep.3 Indosiar</a></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="swiper sw-oneslide">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <a href="{{ asset('images/pt/event/fsi' . $i . '.jpg') }}" data-lightbox="image-4">
                                    <img src="{{ asset('images/pt/event/fsi' . $i . '.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>

                            </div>
                        @endfor
                    </div>
                </div>
                <p>Food Startup Indonesia </p>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12 col-md-6">
                <div class="swiper sw-oneslide">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <a href="{{ asset('images/pt/event/kurasiexport' . $i . '.jpg') }}"
                                    data-lightbox="image-3">
                                    <img src="{{ asset('images/pt/event/kurasiexport' . $i . '.jpg') }}"
                                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>

                            </div>
                        @endfor
                    </div>
                </div>
                <p>Pelatihan Ekspor dan Kurasi Produk Menuju Pasar Timur Tengah</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="{{ asset('images/pt/event/dubes.jpg') }}" data-lightbox="image-3">
                    <img src="{{ asset('images/pt/event/dubes.jpg') }}" class="figure-img img-fluid rounded"
                        style="max-height: 560px"></a>
                {{-- KURANG! : dubes apa --}}
                <p>Persiapan Eksport Produk Cemerlang &#64;Atdag RI untuk UEA - Dubai</p>
            </div>
        </div>
    </div>
</section>
