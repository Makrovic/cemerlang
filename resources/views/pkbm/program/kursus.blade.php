<section class="sec">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Program Keterampilan / Kursus / Pelatihan</h1>
        <ol data-aos="fade-up">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <li>Stir Mobil - Mengemudi (SIM A & C)</li>
                    <li>Bahasa Asing</li>
                    <li>MC - Pranata Cara
                        (Pembawa Acara, Pidato Bahasa Jawa)</li>
                    <li>Tata Busana - Desainer </li>
                    <li>Menjahit</li>
                    <li>Memayet</li>
                    <li>Sulam Pita</li>
                    <li>Tata Kecantikan - Salon</li>
                    <li>Rias Pengantin</li>
                    <li>Dekorasi</li>
                </div>
                <div class="col-12 col-lg-6">
                    <li>Merangkai Bunga</li>
                    <li>Kreasi Hantaran / Hampers</li>
                    <li>Aneka Kerajinan Tangan / Handy Craft</li>
                    <li>Garnish / Bento </li>
                    <li>Tata Boga </li>
                    <li>Pengolahan Hasil Potensi Lokal</li>
                    <li>Fotografi & Videografi</li>
                    <li>Komputer Perkantoran</li>
                    <li>Desain Grafis</li>
                    <li>Digital Marketing</li>
                </div>
            </div>
        </ol>
    </div>
</section>
<section class="sec">
    <div class="container-fluid">
        <div class="row g-2" data-aos="fade-up">
            @for ($i = 1; $i <= 4; $i++) <div class="col-sm-12 col-lg-6">
                <a href="{{ asset('images/pkbm/keterampilan/keterampilan' . $i . '.jpg') }}" data-lightbox="image-1">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/keterampilan/keterampilan' . $i . '.jpg') }}"></a>
        </div>
        @endfor
    </div>
    </div>
</section>