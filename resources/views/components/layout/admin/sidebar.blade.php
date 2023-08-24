<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first text-light">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                            </li> -->
            @if (Auth::guard('ketua')->check())
            <x-layout.sidebar.menu-item url="ketua/dashboard" label="Dashboard" icon="icon icon-home" />
            <x-layout.sidebar.menu-item url="ketua/anggota" label="Club" icon="ti-pie-chart" />
            @elseif (Auth::guard('admin')->check())
                <x-layout.sidebar.menu-item url="admin/dashboard" label="Dashboard" icon="icon icon-home" />
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Master Data</span></a>
                    <ul aria-expanded="false">
                        <x-layout.sidebar.menu-item url="admin/admin" label="Admin" icon="ti-user" />
                        <x-layout.sidebar.menu-item url="admin/ketua_club" label="Ketua Club" icon="ti-user" />
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="ti-credit-card"></i>Keanggotaan & Club</a>
                    <ul aria-expanded="false">
                        <x-layout.sidebar.menu-item url="admin/club" label="Club" icon="ti-user" />
                        <x-layout.sidebar.menu-item url="admin/anggota" label="Anggota" icon="ti-user" />
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Tentang Kami</span></a>
                    <ul aria-expanded="false">
                        <x-layout.sidebar.menu-item url="admin/struktur" label="Struktur Organisasi"
                            icon="ti-bar-chart-alt" />
                        <x-layout.sidebar.menu-item url="admin/profil" label="Profil" icon="ti-credit-card" />
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Informasi</span></a>
                    <ul aria-expanded="false">
                        <x-layout.sidebar.menu-item url="admin/berita" label="Berita" icon="mdi mdi-newspaper" />
                        <x-layout.sidebar.menu-item url="admin/event" label="Event" icon="ti-calendar" />
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Media</span></a>
                    <ul aria-expanded="false">
                        <x-layout.sidebar.menu-item url="admin/galeri" label="Galeri" icon="ti-image" />
                    </ul>
                </li>
                <x-layout.sidebar.menu-item url="admin/RegisterKTA" label="RegisterKta" icon="ti-image" />
            @endif
        </ul>
    </div>
</div>
<!--**********************************
                    Sidebar end
                ***********************************-->
