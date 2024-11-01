<x-app title="Admin | Menu">
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
                                <div class="modal-content"> <!-- Menambahkan padding -->
                                    <div class="modal-header" style="background: #3b4268">
                                        <h5 class="modal-title text-white">Tambah Data Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <form action="{{ url('admin/menu-induk') }}" method="POST">
                                            @csrf
                                            <!-- Judul Menu -->
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul Menu</label>
                                                <input type="text" class="form-control" id="judul" name="judul"
                                                    value="{{ old('judul') }}" required>
                                            </div>

                                            <!-- URL Menu -->
                                            <div class="mb-3">
                                                <label for="url" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="url" name="url"
                                                    value="{{ old('url') }}">
                                                <small class="form-text text-muted">Opsional. Jika kosong, gunakan URL
                                                    default.</small>
                                            </div>

                                            <!-- Level Menu -->
                                            <input type="hidden" name="level" value="0">

                                            <button class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
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
                                        <th>URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $menu->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{ $menu->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $menu->judul }}</td>
                                            <td>{{ $menu->url ?? 'Default URL' }}</td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $menu->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background: #3b4268">
                                                        <h5 class="modal-title text-white">Edit Data Menu</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                
                
                                                        <form action="{{ url('admin/menu-induk',$menu->id) }}" method="POST">
                                                            @method('put')
                                                            @csrf
                                                            <!-- Judul Menu -->
                                                            <div class="mb-3">
                                                                <label for="judul" class="form-label">Judul Menu</label>
                                                                <input type="text" class="form-control" id="judul" name="judul"
                                                                    value="{{ $menu->judul }}" required>
                                                            </div>
                
                                                            <!-- URL Menu -->
                                                            <div class="mb-3">
                                                                <label for="url" class="form-label">URL</label>
                                                                <input type="text" class="form-control" id="url" name="url"
                                                                    value="{{ $menu->url }}">
                                                                <small class="form-text text-muted">Opsional. Jika kosong, gunakan URL
                                                                    default.</small>
                                                            </div>
                
                                                            <!-- Level Menu -->
                                                            <input type="hidden" name="level" value="0">
                
                                                            <button class="btn btn-primary">Simpan</button>
                                                        </form>
                                                    </div>
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
