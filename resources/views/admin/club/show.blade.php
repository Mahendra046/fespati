<x-app title="Admin | Club">
    <div class="container-fluid">
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Club {{ $club->nama_club }}</h4>
                        <br>
                        <h4 class="card-title">Ketua Club: {{ $club->ketua_club->nama }}</h4>
                    </div>
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
                                                        <a href="{{ url('admin/anggota', $anggota->id) }}"
                                                            class="btn btn" style="background: rgb(13, 186, 195)">
                                                            <i class="fa fa-info" style="color: black"></i>
                                                        </a>
                                                        <x-button.delete path="admin/anggota/"
                                                            id="{{ $anggota->id }}" />
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
