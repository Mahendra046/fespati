<x-app title="KetuaClub | Dashboard">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, Selamat Datang</h4>
                <p class="mb-0">Manajemen Data Club Anda</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Club</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-pie-chart text-success"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Club</div>
                                <div class="stat-digit">{{$anggota->nama_club}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-user text-primary border-primary"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Anggota</div>
                                <div class="stat-digit">{{$anggota->anggota_club->where('status_registrasi','Diterima')->count()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Anggota</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Status Panahan</th>
                                            <th>Jenis Panahan</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anggota->anggota_club as $anggota)
                                        @if ($anggota->status_registrasi == 'Diterima')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$anggota->nama}}</td>
                                            <td><span class="badge badge-primary">{{$anggota->status_panahan}}</span>
                                            </td>
                                            <td><span class="badge badge-secondary">{{$anggota->jenis_panahan}}</span></td>
                                            <td class="color-primary"><img src="{{url("public/$anggota->foto")}}" style="width:50px;" alt=""></td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="year-calendar"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
    </div>
</x-app>
