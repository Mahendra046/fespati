<x-app title="Admin | Berita">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Berita</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/berita') }}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Berita</h5>
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
                                                <label for="" class="control-label">Isi Berita</label>
                                                <textarea type="text" name="isi" class="form-control summernote" autocomplete="off"></textarea>
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
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_berita as $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/berita', $berita->id)}}" class="btn btn" style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$berita->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{$berita->id}}"/>
                                                </div>
                                            </td>
                                            <td>{{ $berita->judul }}</td>
                                            <td><img src="{{url("public/$berita->foto")}}" style="width:50%;" alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$berita->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/berita', $berita->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Berita</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Judul</label>
                                                                <input type="text" name="judul" value="{{$berita->judul}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control" value="{{url('public',$berita->foto)}}">
                                                                <img src="{{url("public/$berita->foto")}}" class="img-fluid rounded" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Isi Berita</label>
                                                                <textarea type="text" name="isi" class="form-control">{{$berita->isi}}</textarea>
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
