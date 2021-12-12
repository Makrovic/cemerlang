<h1 class="title text-center" data-aos="fade-up">Program Kuliah Kerja</h1>
<div class="container" data-aos="fade-up">
    <h5>Universitas yang bekerjasama : </h5>
    <div class="row justify-content-center">
        <div class="col-md-4 py-2">
            <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/stikesserulingmas.jpg') }}">
        </div>
        <div class="col-md-4 py-2">
            <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/stiesemarang.jpg') }}">
        </div>
        <div class="col-md-4 py-2">
            <img class="img-fluid rounded" src="{{ asset('images/pkbm/pkk/unw.jpg') }}">
        </div>
    </div>
    <p>
        Ayo kita sukses & mandiri.
        Setelah <b>lulus Paket C di PKBM CEMERLANG</b>, teman-teman dapat melanjutkan <b>kuliah & bekerja</b>.<br><br>
        Teman-teman akan mendapatkan gaji dari kerja rata-rata <b>2,8 juta sebulan</b>.<br>
        Dan teman-teman dapat membayar kuliahnya setiap bulan <b>600 ribu dipotong dari gaji</b>.<br>
        Jadi teman-teman masih memiliki sisa gaji <b>2,2 juta</b>, lumayan kan?<br>
        Dapat untuk biaya hidup mandiri & menabung.
    </p>

    <h5>Dokumentasi</h5>
    <div class="horizontal-scroll swiper sw-dokumentasi" data-aos="fade-up">
        <div class="swiper-wrapper">
            @for($i = 1; $i <= 5; $i++)
                <div class="swiper-slide">
                    <a href="{{ asset('images/pkbm/pembelajaran/pktb'.$i.'.jpg') }}"
                        data-lightbox="image-1">
                        <img class="flex-auto img-fluid rounded"
                            src="{{ asset('images/pkbm/pembelajaran/pktb'.$i.'.jpg') }}"></a>
                </div>
            @endfor
        </div>
    </div>
</div>
