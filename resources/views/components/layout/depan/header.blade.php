<!-- ======= Header ======= -->
@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<header id="header" class="header d-flex align-items-center overlay-black bg-light" style="padding: 0.5rem 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('beranda') }}" class="logo d-flex align-items-center">
            <img src="{{ url('public') }}/focus/images/logo_ppid.png" alt="">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                
            </ul>
            <ul>
                <x-layout.depan.header.menu-item url="beranda" label="Beranda"
                    class="{{ checkRouteActive('beranda') }}" />
                    @foreach($menu as $item)
                    <li class="dropdown">
                        <a href="{{ url('menu/' . $item->id) }}"
                            class="text-dark {{ checkRouteActive('menu/' . $item->id) }}">
                            <span>{{ $item->judul }}</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        
                        @if($item->submenus->isNotEmpty())
                            <ul>
                                @foreach($item->submenus as $submenu)
                                    <x-layout.depan.header.menu-item 
                                        :url="url('/' . $item->id . '/' . $submenu->id)" 
                                        :label="$submenu->judul" 
                                        class="{{ checkRouteActive('/' . $item->id . '/' . $submenu->id) }}" />
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

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
                background: var(--color-primary);">Kontak</a>


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
        padding: 1rem 1rem;
        background: #f9fafa;
    }
</style>
