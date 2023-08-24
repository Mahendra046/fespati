<x-app title="Struktur Organisasi | Fespati Ketapang">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Struktur</h4>
                        @if ($list_struktur->count() == 0)
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                                <i class="fa fa-plus"></i> Tambah Data</button>
                        @endif


                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/struktur') }}" method="post"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Struktur</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Judul</label>
                                                <input type="text" name="judul" class="form-control">
                                            </div>
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
                                    @foreach ($list_struktur as $struktur)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $struktur->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{ $struktur->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $struktur->judul }}</td>
                                            <td><img src="{{ url("public/$struktur->foto") }}" style="width:50%;"
                                                    alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $struktur->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/struktur', $struktur->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Struktur</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for=""
                                                                    class="control-label">Judul</label>
                                                                <input type="text" name="judul"
                                                                    class="form-control" value="{{$struktur->judul}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto</label>
                                                                <input type="file" name="foto"
                                                                    class="form-control"
                                                                    value="{{ url("public/$struktur->foto") }}">
                                                                <img src="{{ url("public/$struktur->foto") }}"
                                                                    class="img-fluid rounded" alt="">
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
