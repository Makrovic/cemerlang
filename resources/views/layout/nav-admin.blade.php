<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block">Admin Panel</span>
    </a>
    <i class="fas fa-bars toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::guard('admin')->user()->name;}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{Auth::guard('admin')->user()->name;}}</h6>
            <span>Admin</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ URL::route('super.logout') }}">
              <i class="fas fa-sign-out-alt"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::url() == url('super/dashboard') ? '' : 'collapsed' }}"
        href="{{route('super.dashboard')}}">
        <i class="fas fa-th-large"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Request::url() == url('super/produk') ? '' : 'collapsed' }}"
        href="{{route('super.produk')}}">
        <i class="fas fa-boxes"></i>
        <span>Produk</span>
      </a>
    </li><!-- End Produk Page Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Request::url() == url('super/order') ? '' : 'collapsed' }}" href="{{route('super.order')}}">
        <i class="fas fa-shopping-cart"></i>
        <span>Pesanan</span>
      </a>
    </li><!-- End Produk Page Nav -->

    <li class="nav-heading">Rekap</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="fas fa-th-list"></i><span>Laporan Transaksi</span><i class="fas fa-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('super.order.weeklyreport')}}">
            <i class="fas fa-circle"></i><span>Mingguan</span>
          </a>
        </li>
        <li>
          <a href="{{route('super.order.monthlyreport')}}">
            <i class="fas fa-circle"></i><span>Bulanan</span>
          </a>
        </li>
        <li>
          <a href="{{route('super.order.annualreport')}}">
            <i class="fas fa-circle"></i><span>Tahunan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Laporan Nav -->

    <li class="nav-heading">Alat</li>

    <li class="nav-item">
      <a class="nav-link {{ Request::url() == url('super/editimage') ? '' : 'collapsed' }}"
        href="{{route('super.editimage')}}">
        <i class="fas fa-shopping-cart"></i>
        <span>Edit Image</span>
      </a>
    </li><!-- End Produk Page Nav -->

  </ul>

</aside><!-- End Sidebar-->