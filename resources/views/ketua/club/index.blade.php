<x-app title="Ketua | Club">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Anggota {{ $club->nama_club }}</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Tambah Data</button>

                    </div>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #3b4268">
                                    <h5 class="modal-title text-white">Tambah Data Anggota</h5>
                                    <button type="button" class="close" style="color:aliceblue"
                                        data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('ketua/anggota') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-lg-5">
                                                <label for="" class="control-label">Nama Anggota</label>
                                                <input type="text" name="nama" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Nama Club</label>
                                                <select name="id_club" class="form-control" id="">
                                                    <option value="{{ $club->id }}">{{ $club->nama_club }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                                <div id="emailHelp" class="form-text">file gambar</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control" id="">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">No Hp</label>
                                                <input type="text" name="no_hp" class="form-control">
                                            </div>
                                            <input type="hidden" name="status_registrasi" class="form-control"
                                                value="Diproses">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="Umum">Umum</option>
                                                    <option value="Pelajar">Pelajar</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="" class="control-label">Bukti Pendaftaran</label>
                                                <input type="file" name="bukti_pendaftaran" class="form-control">
                                                <div id="emailHelp" class="form-text">file gambar</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="" class="control-label">Status Panahan</label>
                                                <select name="status_panahan" id="" class="form-control">
                                                    <option value="Atlet">Atlet</option>
                                                    <option value="Pengurus">Pengurus</option>
                                                    <option value="Pengerajin">Pengerajin</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="control-label">Jenis Panahan</label>
                                                <select name="jenis_panahan" id="" class="form-control">
                                                    <option value="Horsbow">Horsbow</option>
                                                    <option value="Tradisi">Tradisi</option>
                                                    <option value="Wooden Recurve">Wooden Recurve</option>
                                                    <option value="Archery Tag">Archery Tag</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--Modal Tambah -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Status Registrasi</th>
                                        <th>Status Panahan</th>
                                        <th>Jenis Panahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($club->anggota_club as $anggota)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('ketua/anggota', $anggota->id) }}" class="btn btn"
                                                        style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    @if ($anggota->status_registrasi != 'Diterima')
                                                        <a href="" class="btn btn-warning" data-toggle="modal"
                                                            data-target="#edit{{ $anggota->id }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <x-button.delete id="{{ $anggota->id }}" />
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $anggota->nama }}</td>
                                            <td>
                                                @if ($anggota->status_registrasi == 'Diproses')
                                                    <span
                                                        class="badge badge-warning">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                                @if ($anggota->status_registrasi == 'Ditolak')
                                                    <span
                                                        class="badge badge-danger">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                                @if ($anggota->status_registrasi == 'Diterima')
                                                    <span
                                                        class="badge badge-success">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $anggota->status_panahan }}</td>
                                            <td>{{ $anggota->jenis_panahan }}</td>
                                        </tr>
                                        {{-- Modal Edit Start --}}
                                        <div class="modal fade" id="edit{{ $anggota->id }}">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background: #3b4268">
                                                        <h5 class="modal-title text-white">Edit Data Anggota</h5>
                                                        <button type="button" class="close" style="color:aliceblue"
                                                            data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('ketua/anggota', $anggota->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="row">
                                                                <div class="form-group col-lg-5">
                                                                    <label for="" class="control-label">Nama
                                                                        Anggota</label>
                                                                    <input type="text" name="nama"
                                                                        class="form-control"
                                                                        value="{{ $anggota->nama }}"
                                                                        autocomplete="off">
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for="" class="control-label">Nama
                                                                        Club</label>
                                                                    <select name="id_club" class="form-control"
                                                                        id="">
                                                                        <option value="{{ $club->id }}">
                                                                            {{ $club->nama_club }}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-3">
                                                                    <label for=""
                                                                        class="control-label">Foto</label>
                                                                    <input type="file" name="foto"
                                                                        class="form-control"
                                                                        value="{{ url("public/$anggota->foto") }}">
                                                                    <div id="emailHelp" class="form-text">file gambar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-4">
                                                                    <label for="" class="control-label">Jenis
                                                                        Kelamin</label>
                                                                    <select name="jenis_kelamin" class="form-control"
                                                                        id="">
                                                                        <option value="Laki-laki">Laki-laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for=""
                                                                        class="control-label">Alamat</label>
                                                                    <input type="text" name="alamat"
                                                                        class="form-control"
                                                                        value="{{ $anggota->alamat }}">
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for="" class="control-label">No
                                                                        Hp</label>
                                                                    <input type="text" name="no_hp"
                                                                        class="form-control"
                                                                        value="{{ $anggota->no_hp }}">
                                                                </div>
                                                                <input type="hidden" name="status_registrasi"
                                                                    class="form-control" value="Diproses">
                                                                <input type="hidden" name="keterangan"
                                                                    class="form-control"
                                                                    value="Diajukan Kembali">
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-4">
                                                                    <label for=""
                                                                        class="control-label">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control"
                                                                        name="tanggal_lahir"
                                                                        value="{{ $anggota->tanggal_lahir }}">
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for=""
                                                                        class="control-label">Status</label>
                                                                    <select name="status" id=""
                                                                        class="form-control"
                                                                        value="{{ $anggota->status }}">
                                                                        <option value="Umum">Umum</option>
                                                                        <option value="Pelajar">Pelajar</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for="" class="control-label">Bukti
                                                                        Pendaftaran</label>
                                                                    <input type="file" name="bukti_pendaftaran"
                                                                        class="form-control"
                                                                        value="{{ url("public/$anggota->bukti_pendaftaran") }}">
                                                                    <div id="emailHelp" class="form-text">file gambar
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-6">
                                                                    <label for="" class="control-label">Status
                                                                        Panahan</label>
                                                                    <select name="status_panahan" id=""
                                                                        class="form-control">
                                                                        <option value="Atlet">Atlet</option>
                                                                        <option value="Pengurus">Pengurus</option>
                                                                        <option value="Pengerajin">Pengerajin</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label for="" class="control-label">Jenis
                                                                        Panahan</label>
                                                                    <select name="jenis_panahan" id=""
                                                                        class="form-control">
                                                                        <option value="Horsbow">Horsbow</option>
                                                                        <option value="Tradisi">Tradisi</option>
                                                                        <option value="Wooden Recurve">Wooden Recurve
                                                                        </option>
                                                                        <option value="Archery Tag">Archery Tag
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary">Save changes</button>
                                                            </div>
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
