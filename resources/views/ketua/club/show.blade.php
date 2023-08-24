<x-app title="Ketua | Anggota Detail">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"> <img src="{{ url('public/focus/images/fespati-background.jpg') }}"
                                    style="background-size: cover;
                                background-position: center;
                                height: 300px;
                                width: 100%;"
                                    alt=""></div>
                            <div class="profile-photo">
                                <img src="{{ url("public/$anggota->foto") }}" class="img-fluid rounded-circle"
                                    alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary">{{ $anggota->nama }}</h4>
                                                <p>{{ $anggota->status_panahan }}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted">{{ $anggota->jenis_panahan }}</h4>
                                                <p>Jenis Panahan</p>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                            <div class="profile-call">
                                                <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                <p>Phone No.</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div class="row">
                                    <div class="col-12">

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                                    class="nav-link active show">Profil</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="profile-personal-info">
                                                    <br>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Club <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->club->nama_club }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Status Panahan <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->status_panahan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Jenis Panahan <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->jenis_panahan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Tanggal Lahir <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->tanggal_lahir }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Umur <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->umur }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Jenis Kelamin <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->jenis_kelamin }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">No. Hp <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->no_hp }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <div class="row">
                                                    <br>
                                                    @if ($anggota->status_registrasi == 'Diproses')
                                                        <span
                                                            class="badge badge-warning">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                    @if ($anggota->status_registrasi == 'Ditolak')
                                                        <span
                                                            class="badge badge-danger">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                    @if ($anggota->status_registrasi == 'Diterima')
                                                        <span
                                                            class="badge badge-success">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h5>Keterangan :</h5>
                                                    <span class="ml-2">{{ $anggota->keterangan }}</span>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h6>Bukti Pendaftaran</h6>
                                                </div>
                                                <div class="row">
                                                    <a href="{{ url("public/$anggota->bukti_pendaftaran") }}"
                                                        title="Klik untuk melihat detail gambar" target="blank"
                                                        data-gallery="portfolio-gallery-remodeling"
                                                        class="glightbox preview-link">
                                                        <div
                                                            class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                                            <div class="portfolio-content h-100" style="">

                                                                <img src="{{ url("public/$anggota->bukti_pendaftaran") }}"
                                                                    class="img-fluid" alt="">
                                                                <div class="portfolio-info">
                                                                </div>

                                                            </div>
                                                        </div><!-- End Projects Item -->
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .portfolio-content {
            position: relative;
            overflow: hidden;
        }

        .portfolio-content img {
            transition: 0.3s;
            width: 700px;
        }

        .portfolio-content .portfolio-info {
            opacity: 0;
            position: absolute;
            inset: 0;
            z-index: 3;
            transition: all ease-in-out 0.3s;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
        }

        .portfolio-content .portfolio-info p {
            position: absolute;
            bottom: 10px;
            text-align: center;
            display: inline-block;
            left: 0;
            right: 0;
            font-size: 16px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
        }

        .portfolio-content .portfolio-info .preview-link,
        .portfolio-content .portfolio-info .details-link {
            position: absolute;
            left: calc(50% - 40px);
            font-size: 26px;
            top: calc(50% - 14px);
            color: #fff;
            transition: 0.3s;
            line-height: 1.2;
        }

        .portfolio-content .portfolio-info .preview-link:hover,
        .portfolio-content .portfolio-info .details-link:hover {
            color: var(--color-primary);
        }

        .portfolio-content .portfolio-info .details-link {
            left: 50%;
            font-size: 34px;
            line-height: 0;
        }

        .portfolio-content:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio-content:hover img {
            transform: scale(1.1);
        }
    </style>
</x-app>
