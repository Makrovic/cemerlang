<section class="sec">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Program Kuliah Kerja</h1>
        <h3 class="text-center" data-aos="fade-up">Kerja Oke Kuliah Yes (KOKY)</h3>
        <h5 data-aos="fade-up">Universitas yang bekerjasama : </h5>
        <div class="row justify-content-center g-2 my-2" data-aos="fade-up">
            <div class="col-md-4">
                <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/stikesserulingmas.jpg') }}">
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/stiesemarang.jpg') }}">
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/unw.jpg') }}">
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/umpwr.jpg') }}">
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/ust.jpg') }}">
            </div>
        </div>
        <p data-aos="fade-up">
            Ayo kita sukses & mandiri.
            Setelah <b>lulus Paket C di PKBM CEMERLANG</b>, teman-teman dapat melanjutkan <b>kuliah &
                bekerja</b>.<br><br>
            Teman-teman akan mendapatkan gaji dari kerja rata-rata <b>2,8 juta sebulan</b>.<br>
            Dan teman-teman dapat membayar kuliahnya setiap bulan <b>600 ribu dipotong dari gaji</b>.<br>
            Jadi teman-teman masih memiliki sisa gaji <b>2,2 juta</b>, lumayan kan?<br>
            Dapat untuk biaya hidup mandiri & menabung.
        </p>

        <h5 data-aos="fade-up">Dokumentasi</h5>
        <div class="horizontal-scroll swiper sw-dokumentasi" data-aos="fade-up">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 7; $i++) <div class="swiper-slide">
                    <a href="{{ asset('images/pkbm/pkk/pkk' . $i . '.jpg') }}" data-lightbox="image-1">
                        <img class="flex-auto img-fluid rounded"
                            src="{{ asset('images/pkbm/pkk/pkk' . $i . '.jpg') }}"></a>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>