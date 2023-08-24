<!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header bg-white">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ url('public/focus') }}/images/FESPATI KETAPANG.png" alt="">
                <img class="brand-title" src="{{ url('public/focus') }}/images/fespatifontblack.png" alt="" style="max-width:180px">
            </a>

            <div class="nav-control">
                <div class="hamburger" style="color:white;">
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
                                    <i class="mdi">{{auth()->user()->nama}}</i>
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    @if (Auth::guard('ketua')->check())
                                    <a href="{{url('ketua/profil')}}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Profil </span>
                                    </a>
                                    @endif
                                    <a href="{{url('logout')}}" class="dropdown-item">
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
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
