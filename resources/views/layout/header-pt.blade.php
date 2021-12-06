<header>
    <div id="navheader" class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">PT Bintang Cemerlang Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Unit Pendidikan<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('landing/rooms') }}">Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('landing/about') }}">Observasi &
                            Studi Banding</a>
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