<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Gallery</h1>
        <div class="row g-3" data-aos="fade-up">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="{{ asset('images/pt/carica/carica' . $i . '.jpg') }}" data-lightbox="image-2">
                        <div class="card" style="height: 100%">
                            <img src="{{ asset('images/pt/carica/carica' . $i . '.jpg') }}" class="rounded"
                                style="object-fit: cover; height: 100%">
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
</section>
