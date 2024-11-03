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
                                        <h5 class="modal-title text-white">Tambah Menu Tambahan</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <form action="{{ url('admin/menu-tambahan') }}" method="POST">
                                            @csrf
                                            <!-- Judul Menu -->
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul Menu</label>
                                                <input type="text" class="form-control" id="judul" name="judul"
                                                    value="{{ old('judul') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_induk" class="form-label">Menu Induk</label>
                                                <select class="form-control" id="id_induk" name="id_induk">
                                                    <option value="">-- Pilih Menu Induk --</option>
                                                    @foreach($menuinduk as $menu)
                                                        <option value="{{ $menu->id }}" {{ old('id_induk') == $menu->id ? 'selected' : '' }}>
                                                            {{ $menu->judul }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Pilih menu induk jika ini adalah submenu.</small>
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
                                        <th>Menu Induk</th>
                                        <th>Judul</th>
                                        <th>URL</th>
                                        <th>Level</th>
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
                                            <td>{{ $menu->induk ? $menu->induk->judul : '-' }}</td>
                                            <td>{{ $menu->judul }}</td>
                                            <td>{{ $menu->url ?? 'Default URL' }}</td>
                                            <td>
                                                @if ($menu->level == 1)
                                                    Submenu 1
                                                @elseif ($menu->level == 2)
                                                    Submenu 2
                                                @endif
                                            </td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $menu->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background: #3b4268">
                                                        <h5 class="modal-title text-white">Edit Data Menu Tambahan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                
                
                                                        <form action="{{ url('admin/menu-tambahan',$menu->id) }}" method="POST">
                                                            @method('put')
                                                            @csrf
                                                            <!-- Judul Menu -->
                                                            <div class="mb-3">
                                                                <label for="judul" class="form-label">Judul Menu</label>
                                                                <input type="text" class="form-control" id="judul" name="judul"
                                                                    value="{{ $menu->judul }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="id_induk" class="form-label">Menu Induk</label>
                                                                <select class="form-control" id="id_induk" name="id_induk">
                                                                    <option value="{{ $menu->induk->id }}">{{ $menu->induk->judul }}</option>
                                                                    @foreach($menuinduk as $menus)
                                                                        <option value="{{ $menus->id }}" {{ old('id_induk') == $menus->id ? 'selected' : '' }}>
                                                                            {{ $menus->judul }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <small class="form-text text-muted">Pilih menu induk jika ini adalah submenu.</small>
                                                            </div>
                                                            <!-- URL Menu -->
                                                            <div class="mb-3">
                                                                <label for="url" class="form-label">URL</label>
                                                                <input type="text" class="form-control" id="url" name="url"
                                                                    value="{{ $menu->url }}">
                                                                <small class="form-text text-muted">Opsional. Jika kosong, gunakan URL
                                                                    default.</small>
                                                            </div>
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
