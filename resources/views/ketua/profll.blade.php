<x-app title="Admin | Profil">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"> <img src="{{url('public/focus/images/fespati-background.jpg')}}" style="background-size: cover;
                                background-position: center;
                                height: 300px;
                                width: 100%;"  alt=""></div>
                            <div class="profile-photo">
                                <img src="{{url("public/$profil->foto")}}" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary">{{$profil->nama}}</h4>
                                                <p>{{$profil->status_panahan}}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted">{{$profil->club->nama_club}}</h4>
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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">Profil</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">

                                        </div>
                                        <div class="profile-personal-info">
                                            <br>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{$profil->nama}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Club <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{$profil->club->nama_club}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Jabatan <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>Ketua Club  {{$profil->club->nama_club}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Anggota CLub <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{$profil->club->anggota_club->count()}}</span>
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
</x-app>
