<x-app title="Admin | Ketua">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Ketua Club</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/ketua_club') }}" method="post" novalidate enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Ketua</h5>
                                            <button type="button" class="close" style="color:aliceblue"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Ketua Club</label>
                                                <input type="text" name="nama" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Password</label>
                                                <input type="text" name="password" class="form-control" autocomplete="off">
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
                                        <th>Nama Ketua</th>
                                        <th>Email</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_ketua as $ketua)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$ketua->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @if ($ketua->club == null)

                                                    <x-button.delete path="admin/ketua_club/" id="{{$ketua->id}}"/>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $ketua->nama }}</td>
                                            <td>{{ $ketua->email }}</td>
                                            <td><img src="{{url("public/$ketua->foto")}}" style="width:80px;" alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$ketua->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/ketua_club', $ketua->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Ketua</h5>
                                                            <button type="button" class="close" style="color: aliceblue"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Ketua</label>
                                                                <input type="text" name="nama" value="{{$ketua->nama}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control">
                                                                <img src="{{url("public/$ketua->foto")}}" class="img-fluid rounded" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Email</label>
                                                                <input type="text" name="email" class="form-control" value="{{$ketua->email}}">
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
