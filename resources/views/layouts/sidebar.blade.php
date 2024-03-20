<style>
    .color {
        background-color: #162527;
    }
</style>
<ul class="navbar-nav color sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Wisata</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-home"></i>
                <span>Dashboard</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">
                <i class="fas fa-user"></i>
                <span>User</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Pelanggan')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pelanggan') }}">
                <i class="fas fa-database"></i>
                <span>Data Pelanggan</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori_wisata') }}">
                <i class="fas fa-archway"></i>
                <span>Kategori Wisata</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori_berita') }}">
                <i class="fas fa-newspaper"></i>
                <span>Kategori Berita</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('obyek_wisata') }}">
                <i class="fas fa-monument"></i>
                <span>Obyek Wisata</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('penginapan') }}">
                <i class="fas fa-hotel"></i>
                <span>Penginapan</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('karyawan') }}">
                <i class="fas fa-user-tie"></i>
                <span>Karyawan</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('berita') }}">
                <i class="fas fa-newspaper"></i>
                <span>Berita</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Bendahara')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('paket_wisata') }}">
                <i class="fas fa-bus-alt"></i>
                <span>Paket Wisata</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Pelanggan' || auth()->user()->level == 'Bendahara')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reservasi') }}">
                <i class="fas fa-suitcase-rolling"></i>
                <span>Reservasi</span></a>
        </li>
    @endif

    @if (auth()->user()->level == 'Pemilik')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cetakReser') }}" target="_blank">
                <i class="fas fa-print"></i>
                <span>Cetak PDF</span></a>
        </li>
    @endif

    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('barang') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Barang</span></a>
    </li> --}}

    {{-- @if (auth()->user()->level == 'Bendahara')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Kategori</span></a>
        </li>
    @endif --}}


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
