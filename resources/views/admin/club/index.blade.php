<x-app title="Admin | Club">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Club</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/club') }}" method="post" novalidate>
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Club</h5>
                                            <button type="button" class="close" style="color:aliceblue"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Club</label>
                                                <input type="text" name="nama_club" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Ketua</label>
                                                <select name="id_ketua" id="" class="form-control">
                                                    <option value="">--PILIH--</option>
                                                    @foreach ($list_ketua as $ketua)
                                                    <option class="form-control" value="{{$ketua->id}}">{{$ketua->nama}}</option>
                                                    @endforeach
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
                                        <th>Nama Club</th>
                                        <th>Nama Ketua</th>
                                        <th>Jumlah Anggota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_club as $club)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/club', $club->id)}}" class="btn btn" style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$club->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @if ($club->anggota_club->count() == null)

                                                    <x-button.delete path="admin/club/" id="{{$club->id}}"/>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $club->nama_club }}</td>
                                            <td>{{$club->ketua_club->nama}}</td>
                                            <td>{{$club->anggota_club->count()}}</td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$club->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/ketua_club', $club->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Club</h5>
                                                            <button type="button" class="close" style="color:aliceblue"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Ketua</label>
                                                                <input type="text" name="nama" value="{{$club->nama}}" class="form-control">
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
