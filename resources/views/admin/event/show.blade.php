<x-app title="Admin | Event">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Show Event</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Foto</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/event/foto') }}" method="post"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Foto Event</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <input type="hidden" value="{{ $event->id }}" name="id_event">

                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tambah -->
                    </div>
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                            class="nav-link active show">Detail Event</a>
                                    </li>
                                </ul>
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
                                                            <h5 class="f-w-500">Nama Event <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $event->nama_event }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Keterangan <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{!!nl2br($event->keterangan)!!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Mulai <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $event->mulai }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Selesai <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $event->selesai }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Lampiran <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>

                                                        <div class="col-9"><span>
                                                                <table>
                                                                    <tr>
                                                                        <th><img src="{{url("public/$event->foto")}}" alt="" width="60px" class="mr-3"></th>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <div class="row">
                                                    <h5>Link :</h5>
                                                    <span class="ml-2">{{ $event->link }}</span>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <a href="{{ url("public/$event->bukti_pendaftaran") }}"
                                                        title="Klik untuk melihat detail gambar" target="blank"
                                                        data-gallery="portfolio-gallery-remodeling"
                                                        class="glightbox preview-link">
                                                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                                            <div class="portfolio-content h-100" style="">

                                                                <img src="{{ url("public/$event->bukti_pendaftaran") }}"
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
</x-app>
