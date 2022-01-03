<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Gallery</h1>
        <div class="row" data-masonry='{"percentPosition": true }'>
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="{{ asset('images/pt/carica/carica' . $i . '.jpg') }}" data-lightbox="image-2">
                        <img src="{{ asset('images/pt/carica/carica' . $i . '.jpg') }}"
                            class="figure-img img-fluid rounded" style="max-height: 560px"></a>
                </div>
            @endfor
        </div>
    </div>
</section>
