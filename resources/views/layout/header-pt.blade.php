<header>
    <div id="navheader" class="container-fluid navheader-transparent">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/pkbm') }}">
                <img src="{{ asset('images/pkbm/logo-nav.png') }}" width="220px" alt="PKBM CEMERLANG">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Unit Pendidikan<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('landing/rooms') }}">Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('landing/contact') }}">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('landing/contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
