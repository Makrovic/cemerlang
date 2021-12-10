<header>
    <div id="navheader" class="container-fluid navheader-transparent">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo-nav.png') }}" width="220px" alt="PKBM CEMERLANG">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/bintang') }}">Unit Usaha</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('pkbm/visimisi') }}">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/program') }}">Program</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/legalitas') }}">Legalitas</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/fasilitas') }}">Fasilitas</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/tim') }}">Struktur Tim</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/achievement') }}">Achievement</a></li>
                            <li><a class="dropdown-item" href="{{ url('pkbm/testimoni') }}">Testimoni & Success Story</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pkbm/infopendaftaran') }}">Info
                            Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pkbm/studibanding') }}">Observasi &
                            Studi Banding</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>