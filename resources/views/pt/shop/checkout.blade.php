@extends('layout.base')
@section('customcss')
    <link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
    {{-- banner --}}
    <div id="banner" class="banner" style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Checkout</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    {{-- @dump($produk) --}}
    <section class="sec back-gray">
        <div class="container">
            <form method="post" action="{{ URL::route('bintang.shop.checkout.confirm') }}">
                {{ csrf_field() }}
                <div class="row flex-row">
                    <div class="col">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <h2 class="text-center">Detail Pesanan</h2>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
                                <label for="nama">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="provinsi" name="provinsi" required>
                                    <option value="" selected>pilih provinsi</option>
                                    @foreach ($provinsis as $province_id => $province_name)
                                        <option value="{{ $province_id }}">{{ $province_name }}</option>
                                    @endforeach
                                </select>
                                <label for="provinsi">Provinsi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="kota" name="kota" required>
                                    <option value="">pilih provinsi terlebih dahulu</option>
                                </select>
                                <label for="kota">Kota</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required>
                                <label for="kecamatan">Kecamatan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="zip" required>
                                <label for="zip">Kode Pos</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="alamat lengkap" id="alamat" name="alamat"
                                    style="min-height: 100px; max-height: 200px" required></textarea>
                                <label for="alamat">Alamat Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="nohp" required>
                                <label for="nohp">No Telepon / Whatsapp</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="kurir" name="kurir" required>
                                    <option value="">pilih kota terlebih dahulu</option>
                                </select>
                                <label for="kurir">Ekspedisi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="catatan" id="catatan" name="catatan"
                                    style="min-height: 100px; max-height: 200px"></textarea>
                                <label for="catatan">Catatan untuk kurir</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ URL::route('bintang.shop.cart') }}"
                                        class="btn badge back-primaryc link-light text-decoration-none">
                                        kembali ke keranjang
                                    </a>
                                </div>
                                <div class="col text-end">
                                    <a id="btn-cek-ongkir" class="btn badge back-primaryc link-light text-decoration-none"
                                        style="visibility: hidden">
                                        cek tarif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-white p-2 rounded shadow-sm">
                            @foreach ($carts as $cart)
                                <div class="row m-2">
                                    <div class="col-auto">
                                        <img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt=""
                                            class="img-fluid rounded-3" style="max-width: 80px">
                                    </div>
                                    <div class="col d-flex flex-column justify-content-center">
                                        <span>{{ $cart['jumlah'] }} <b>{{ $cart['nama'] }}</b><br>
                                            Rp. {{ number_format($cart['subtotal']) }}<br>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                            <h4 class="text-center m-2">Total</h4>
                            <div class="row border-bottom m-2">
                                <div class="col">Total Barang</div>
                                <div class="col">{{ session('totalan')['totalbrg'] }}</div>
                            </div>
                            <div class="row border-bottom m-2">
                                <div class="col">Total Berat</div>
                                <div class="col">{{ session('totalan')['totalbrt'] }} gr</div>
                            </div>
                            <div class="row border-bottom m-2">
                                <div class="col">Subtotal</div>
                                <div class="col">Rp. {{ number_format(session('totalan')['total']) }},-</div>
                                {{-- <input type="hidden" name="subtotal" id="subtotal" value="{{ $total }}"> --}}
                            </div>
                            <div class="row border-bottom m-2">
                                <div class="col">Ongkos Kirim</div>
                                <div class="col">
                                    <fieldset id="cost">
                                        -
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row border-bottom m-2">
                                <div class="col">Total</div>
                                <div class="col">
                                    <span id="total">
                                        -
                                    </span>
                                </div>
                            </div>
                            <div class="text-center">
                                <form accept-charset="UTF-8" role="form" action="" method="POST">
                                    {{ csrf_field() }}
                                    <fieldset id="form-checkout">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop
@section('customjs')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#provinsi").change(function() {
            let provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '/bintang/shop/checkout/getcities/' + provinceId,
                    dataType: 'json',
                    success: function(response) {
                        $('#kota').empty();
                        $('#kota').append('<option value="">pilih kota</option>');
                        $.each(response, function(key, value) {
                            $('#kota').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    },
                });
            }
        });

        $("#kota").change(function() {
            $('#kurir').empty();
            $('#kurir').append('<option value="">pilih ekspedisi</option>');
            $('#kurir').append(
                '<option value="jne">JNE</option><option value="pos">POS Indonesia</option>');
        });

        $("#kurir").change(function() {
            $('#btn-cek-ongkir').css('visibility', 'visible');
        });

        let subtotal = {{ session('totalan')['total'] }};

        $('#btn-cek-ongkir').click(function() {
            let token = $("meta[name='csrf-token']").attr("content");
            let city = $('#kota').val();
            let courier = $('#kurir').val();

            if (courier) {
                $.ajax({
                    type: 'POST',
                    url: '/bintang/shop/checkout/couriercheck',
                    data: {
                        _token: token,
                        city: city,
                        courier: courier,
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response) {
                            var i = 0;
                            $('#cost').empty();
                            $.each(response[0]['costs'], function(key, value) {
                                $('#cost').append(
                                    '<div class="form-check"><input class="form-check-input" type="radio" id="ongkir' +
                                    i + '" name="cost" value="' +
                                    city +':'+ response[0].code +':'+ i +':'+ value.cost[0].value +
                                    '" checked><label class="form-check-label" for="ongkir' +
                                    i + '">Rp. ' + value.cost[0].value + '<br>' +
                                    response[0].code.toUpperCase() + value
                                    .service + ' (' + value.cost[0].etd +
                                    ' hari)</label></div>'
                                );
                                i++;
                            });
                            i--;
                            let cost = $('#cost #ongkir'+i).val();
                            radioChangeValue(cost);
                            $('#cost input[type=radio]').change(function() {
                                radioChangeValue($(this).val());
                            });
                        }
                    },
                });
            }
        });

        function radioChangeValue(value) {
            var cost = value.split(':');
            let total = parseFloat(cost[3]) + parseFloat(subtotal);
            $('#total').empty();
            $('#total').append('Rp. ' + total + ',-');
            $('#form-checkout').empty();
            $('#form-checkout').append(
                '<button type="submit" class="btn btn-carica m-3">Buat Pesanan</button>');
            $('#form-checkout').append(
                '<br><span class="text-muted">mohon cek kembali dengan teliti data diri dan alamat anda');
        }
    </script>
@stop
