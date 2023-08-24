<!-- ======= Header ======= -->
@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<header id="header" class="header d-flex align-items-center overlay-black">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('beranda') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ url('public') }}/Up/assets/img/kormi.png" alt="">
            <img src="{{ url('public') }}/Up/assets/img/logo-fespati.png" alt="">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <x-layout.depan.header.menu-item url="beranda" label="Beranda"
                    class="{{ checkRouteActive('beranda') }}" />
                <li class="dropdown"><a href="#"
                        class="{{ checkRouteActive('sejarah') }} {{ checkRouteActive('visi_misi') }} {{ checkRouteActive('struktur_organisasi') }}"><span>Tentang
                            Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <x-layout.depan.header.menu-item url="sejarah" label="Sejarah Fespati"
                            class="{{ checkRouteActive('sejarah') }}" />
                        <x-layout.depan.header.menu-item url="visi_misi" label="Visi Misi Fespati"
                            class="{{ checkRouteActive('visi_misi') }}" />
                        <x-layout.depan.header.menu-item url="struktur_organisasi" label="Struktur Organisasi Fespati Ketapang"
                            class="{{ checkRouteActive('struktur_organisasi') }}" />
                    </ul>
                </li>

                <li class="dropdown"><a href="#"
                        class="{{ checkRouteActive('registrasi_anggota') }} {{ checkRouteActive('event') }} {{ checkRouteActive('berita') }} {{ checkRouteActive('berita/detail/{berita}') }} "><span>Informasi</span>
                        <i class="bi bi-chevron-down dropdown-indicator  "></i></a>
                    <ul>
                        <x-layout.depan.header.menu-item url="berita" label="Berita"
                            class="{{ checkRouteActive('berita') }} {{ checkRouteActive('berita/detail/{berita}') }}" />
                        <x-layout.depan.header.menu-item url="event" label="Event"
                            class="{{ checkRouteActive('event') }}" />
                    </ul>
                </li>
                <li class="dropdown"><a href="#"
                        class="{{ checkRouteActive('foto') }} {{ checkRouteActive('video') }}"><span>Media</span> <i
                            class="bi bi-chevron-down dropdown-indicator  "></i></a>
                    <ul>
                        <x-layout.depan.header.menu-item url="foto" label="Foto"
                            class="{{ checkRouteActive('foto') }}" />
                    </ul>
                </li>
                <x-layout.depan.header.menu-item url="register" label="Register KTA"
                            class="{{ checkRouteActive('register') }}" />

                <a href="{{ url('kontak') }}" class="btn-get-started"
                    style="font-family: var(--font-primary);
                font-weight: 500;
                font-size: 12px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 12px 30px;
                border-radius: 50px;
                margin: 6px;
                color: #fff;
                background: var(--color-primary);">Hubungi
                    Kami</a>


            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<style>
    #wpadminbar {
        font-size: 13px;
        font-weight: 400;
        height: 20px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        min-width: 600px;
        z-index: 99999;
        background: #ffffff;
    }

    .header.sticky {
        padding: 2rem 2rem;
        background: #124e55;
    }
</style>
