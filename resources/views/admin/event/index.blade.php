<x-app title="Admin | Event">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Event</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/event') }}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Event</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Event</label>
                                                <input type="text" name="nama_event" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Keterangan</label>
                                                <textarea type="text" name="keterangan" class="form-control summernote" autocomplete="off"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Mulai</label>
                                                <input type="date" name="mulai" class="form-control input-daterange-datepicker">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Selesai</label>
                                                <input type="date" name="selesai" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Link Pendaftaran</label>
                                                <input type="text" name="link" class="form-control" autocomplete="off">
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
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Event</th>
                                        <th>Link Pendaftaran</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_event as $event)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/event', $event->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$event->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{$event->id}}"/>
                                                </div>
                                            </td>
                                            <td>{{ $event->nama_event }}</td>
                                            <td>{{ $event->link }}</td>
                                            <td><img src="{{url("public/$event->foto")}}" style="width:50%;" alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$event->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/event', $event->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Event</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Event</label>
                                                                <input type="text" name="nama_event" value="{{$event->nama_event}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Keterangan</label>
                                                                <textarea type="text" name="keterangan" class="form-control summernote">{{$event->keterangan}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Event Mulai</label>
                                                                <input type="date" name="mulai" value="{{$event->mulai}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Event Selesai</label>
                                                                <input type="date" name="selesai" value="{{$event->selesai}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jam</label>
                                                                <input type="time" name="jam" class="form-control" value="{{$event->jam}}" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Lokasi</label>
                                                                <input type="text" name="lokasi" class="form-control" value="{{$event->lokasi}}">
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
                                        {{-- Modal Edit End --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
