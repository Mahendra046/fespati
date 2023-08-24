<x-app title="Admin | Fespati-Profil">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Profil</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/profil') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Profil Fespati</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="" class="control-label">Jenis</label>
                                                <select name="jenis" class="form-control" id="">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Sejarah">Sejarah</option>
                                                    <option value="Visi">Visi</option>
                                                    <option value="Misi">Misi</option>
                                                    <option value="Periode">Periode Kepengurusan</option>
                                                </select>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Foto</label>
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Isi</label>
                                                <textarea name="isi" id="" class="summernote" placeholder="isi"></textarea>
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
                                        <th>Jenis</th>
                                        <th>Isi</th>
                                        <th>Atribut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_profil as $profil)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$profil->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{$profil->id}}"/>
                                                </div>
                                            </td>
                                            <td>{{$profil->jenis}}</td>
                                            <td>{!!nl2br ($profil->isi)!!}</td>
                                            <td><img src="{{url("public/$profil->foto")}}" style="width:200px;" alt=""></td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$profil->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/profil', $profil->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Profil Fespati</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jenis</label>
                                                                <select name="jenis" class="form-control" id="">
                                                                    <option value="{{$profil->jenis}}">{{$profil->jenis}}</option>
                                                                    <option value="Sejarah">Sejarah</option>
                                                                    <option value="Visi">Visi</option>
                                                                    <option value="Misi">Misi</option>
                                                                    <option value="Proker">Proker</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Foto</label>
                                                                    <input type="file" name="foto" class="form-control" value="{{url('public',$profil->foto)}}">
                                                                    <img src="{{url("public/$profil->foto")}}" class="img-fluid rounded" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Isi</label>
                                                                <textarea name="isi" id="" class="summernote" placeholder="isi">{!!nl2br ($profil->isi) !!}</textarea>
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
