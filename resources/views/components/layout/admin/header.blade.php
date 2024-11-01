<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header " style="padding: 0.5rem 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{ url('public/focus') }}/images/logo.png" alt="">
        <h4 class="brand-title" style=" color: #fefefe; font-size: 16px; margin-top:12px;">PPID BALIKPAPAN</h4>
    </a>

    <div class="nav-control">
        <div class="hamburger" style="color:rgb(255, 255, 255);">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header bg-white">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav header-left"></ul>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile float-right">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi">{{ auth()->user()->nama }}</i>
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if (Auth::guard('ketua')->check())
                                <a href="{{ url('ketua/profil') }}" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Profil </span>
                                </a>
                            @endif
                            <a href="{{ url('logout') }}" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<style>
    .nav-header {
        height: 3.5rem;
        width: 17.1875rem;
        display: inline-block;
        text-align: left;
        position: fixed;
        left: 0;
        top: 0;
        background-color: #111010;
        transition: all .2s ease;
        z-index: 4;
    }

    .header {
        height: 3.5rem;
        z-index: 1;
        position: relative;
        padding: 0rem;
        background-color: #fff;
        z-index: 3;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding-left: 17.1875rem;
        transition: all .2s ease;
    }

    .hamburger .line {
        background: #187683;
        display: block;
        height: 2px;
        margin-top: 6px;
        margin-bottom: 6px;
        margin-left: auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .nav-control .hamburger .line {
        background-color: #187683 !important; }
</style>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
