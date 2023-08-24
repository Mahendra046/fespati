<x-app title="Admin | Master Data">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Admin</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/admin') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Admin</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control form-control-sm @error('nama') is-invalid @enderror">
                                                @error('nama')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Level</label>
                                                <select name="level" class="form-control" id="">
                                                    <option value="">--Pilih--</option>
                                                    <option value="operasional">Operasional</option>
                                                    <option value="umum">Umum</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">No.Hp</label>
                                                <input type="text" name="no_hp" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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
                                        <th>Nama Admin</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_admin as $admin)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin', $admin->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $admin->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{ $admin->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $admin->nama }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>{{ $admin->level }}</td>
                                            <td>{{ $admin->password }}</td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $admin->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/admin', $admin->id) }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Admin</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama</label>
                                                                <input type="text" name="nama"
                                                                    class="form-control" value="{{ $admin->nama }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label"></label>
                                                                <input type="text" name="no_hp" class="form-control" value="{{$admin->no_hp}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for=""
                                                                    class="control-label">Email</label>
                                                                <input type="text" name="email"
                                                                    class="form-control" value="{{ $admin->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Level</label>
                                                                <select name="level" class="form-control" id="">
                                                                    <option value="operasional">operasional</option>
                                                                    <option value="umum">umum</option>
                                                                </select>
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
