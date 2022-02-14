<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-12 footer-contact my-3" data-aos="fade-up">
                    {{-- KURANG! : logo PT --}}
                    <img src="{{ asset('images/pkbm/logo-nav.png') }}" alt="" class="img-fluid"
                        style="max-width: 240px">
                    <p class="text-break">
                        Jl. Dieng km. 4<br>
                        Sibunderan rt.5 rw.4 Krasak Mojotengah<br>
                        Wonosobo<br>
                        56351<br><br>
                        <strong>Telp : </strong>(0286) 322634 | 081225220948<br>
                        <strong>Email : </strong>bintangcemerlangindonesia@gmail.com<br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-link my-3" data-aos="fade-up" data-aos-delay="200">
                    <h5>Carica Cemerlang</h5>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica') }}">
                                Legalitas</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica.tentangproduk') }}">
                                Tentang
                                Produk</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica.fasilitas') }}">
                                Fasilitas</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica.ekspansi') }}">
                                Ekspansi
                                Pemasaran & Jaringan Kemtiraan</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica.achievement') }}">
                                Achievement</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.carica.expo') }}">
                                Expo</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-link my-3" data-aos="fade-up" data-aos-delay="400">
                    <h5>Bintang Cemerlang Snack</h5>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.snack') }}"> Produk</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-link my-3" data-aos="fade-up" data-aos-delay="400">
                    <h5>Claster Craft Cemerlang</h5>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i><a href="{{ route('bintang.craft') }}"> Produk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-foot d-flex flex-wrap align-items-center">
        <div class="copyright me-auto">
            <div>&copy;Copyright <strong>Cemerlang</strong>. All rights reserved</div>
        </div>
        <div class="socialmedia">
            <a target="_blank" href="{{ url('https://www.facebook.com/pkbmcemerlangwonosobo') }}"><i
                    class="fab fa-facebook"></i></a>
            <a target="_blank" href="{{ url('https://www.instagram.com/caricacemerlang') }}"><i
                    class="fab fa-instagram"></i></a>
            <a target="_blank" href="{{ url('https://www.youtube.com/channel/UCIONNHJ0VkFIMiIMwu0E4lQ') }}"><i
                    class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>
