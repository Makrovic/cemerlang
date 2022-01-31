<header>
    <div id="navheader" class="container-fluid navheader-transparent">
        <nav class="navbar navbar-dark navbar-expand-xl">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- KURANG! : logo yayasan --}}
                    <img src="{{ asset('images/pkbm/logo-nav.png') }}" width="220px" alt="PKBM CEMERLANG">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('pkbm') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.visimisi') }}">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.program') }}">Program</a></li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.legalitas') }}">Legalitas</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.fasilitas') }}">Fasilitas</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.tim') }}">Struktur Tim</a></li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.achievement') }}">Achievement</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.testimoni') }}">Testimoni &
                                        Success Story</a></li>
                                <li><a class="dropdown-item" href="{{ URL::route('pkbm.liputan') }}">Liputan Media &
                                        Narasumber</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::route('pkbm.infopendaftaran') }}">Info
                                Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::route('pkbm.studibanding') }}">Observasi &
                                Studi Banding</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>