<x-app title="Admin | Dokumen Register">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Dokumen Register</h4>
                        @if ($dokumen->count() < 1)
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>

                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/RegisterKTA') }}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Dokumen Register</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="" class="control-label">Judul</label>
                                                <input type="text" name="judul" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Keterangan</label>
                                                <textarea name="keterangan" id="" cols="30" class="summernote" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Link Dokumen</label>
                                                <input type="text" name="link_unduhan" class="form-control" autocomplete="off">
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
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Link Dokumen</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokumen as $dokumen)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$dokumen->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete path="admin/RegisterKTA/" id="{{$dokumen->id}}"/>
                                                </div>
                                            </td>
                                            <td>{{ $dokumen->judul }}</td>
                                            <td>{!!nl2br($dokumen->keterangan)!!}</td>
                                            <td>{{ $dokumen->link_unduhan}}</td>
                                            <td><img src="{{url("public/$dokumen->foto")}}" style="width:50%;" alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$dokumen->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/RegisterKTA', $dokumen->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Dokumen Register</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Dokumen Register</label>
                                                                <input type="text" name="judul" value="{{$dokumen->judul }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">link Pendaftaran</label>
                                                                <input type="text" name="link_unduhan" class="form-control" value="{{$dokumen->link_unduhan}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control" value="{{url("public/$dokumen->foto")}}">
                                                                <img src="{{url("public/$dokumen->foto")}}" class="img-fluid rounded" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Dokumen Register</label>
                                                                <textarea name="keterangan" id=""  class="summernote" cols="30" value="" rows="10">{!!nl2br($dokumen->keterangan)!!}</textarea>
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
