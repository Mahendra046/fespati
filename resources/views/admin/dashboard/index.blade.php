<x-app title="Admin | Dashboard">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-pie-chart text-success"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Club</div>
                        <div class="stat-digit">{{$list_club->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Anggota</div>
                        <div class="stat-digit">{{$list_anggota->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-layout-grid2 text-pink border-pink"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Berita</div>
                        <div class="stat-digit">{{$list_berita->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-one card-body">
                    <div class="stat-icon d-inline-block">
                        <i class="ti-image text-danger border-danger"></i>
                    </div>
                    <div class="stat-content d-inline-block">
                        <div class="stat-text">Galeri</div>
                        <div class="stat-digit">{{$list_galeri->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="year-calendar"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Event</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table student-data-table m-t-20">
                            <thead>
                                <tr>
                                    <th>Nama Event</th>
                                    <th>Mulai</th>
                                    <th>Sampai</th>
                                    <th>thumbnail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_event as $event)
                                <tr>
                                    <td>
                                        {{$event->nama_event}}
                                    </td>
                                    <td>
                                        {{$event->mulai}}
                                    </td>
                                    <td>
                                        <span>{{$event->selesai}}</span>
                                    </td>
                                    <td>
                                        <img src="{{url("public/$event->foto")}}" style="width:10rem;" alt="">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
