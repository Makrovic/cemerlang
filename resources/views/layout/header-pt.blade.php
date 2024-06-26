<header>
    <div id="navheader" class="container-fluid navheader-transparent">
        <nav class="navbar navbar-expand-xl navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/pt/logo-nav.png') }}" width="220px" alt="PKBM CEMERLANG">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('bintang') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Bisnis
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ URL::route('bintang.carica') }}">Carica
                                        Cemerlang</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ URL::route('bintang.snack') }}">Bintang
                                        Cemerlang
                                        Snack</a></li>
                                <li><a class="dropdown-item" href="{{ URL::route('bintang.craft') }}">Claster Craft
                                        Cemerlang</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::route('bintang.shop') }}">Belanja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::route('bintang.contact') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('bintang/shop/cart') }}">Keranjang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
