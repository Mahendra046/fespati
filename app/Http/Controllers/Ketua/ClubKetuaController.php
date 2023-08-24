<?php

namespace App\Http\Controllers\Ketua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\AnggotaClub;
use App\Models\MasterData\Club;
use App\Models\MasterData\KetuaClub;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ClubKetuaController extends Controller
{
    function index() {
        $user = Auth::guard('ketua')->id();
        $ketua = KetuaClub::with('Club')->find($user);
        $club = $ketua->club->id;
        $data ['club'] = Club::with('ketua_club','anggota_club')->find($club);
        return view('ketua.club.index',$data);
    }

    function show($anggota) {
        $anggota = AnggotaClub::with('club')->find($anggota);

        // Menghitung umur anggota

        $tanggalLahir = Carbon::parse($anggota->tanggal_lahir);
        $umur = $tanggalLahir->diffInYears(Carbon::now());
        $anggota->umur = $umur;
        // return $anggota;
        return view('ketua.club.show',['anggota' => $anggota]);
    }

    function store() {
        $anggota = new AnggotaClub;
        $anggota->nama = request('nama');
        $anggota->id_club = request('id_club');
        $anggota->jenis_kelamin = request('jenis_kelamin');
        $anggota->alamat = request('alamat');
        $anggota->tanggal_lahir = request('tanggal_lahir');
        $anggota->status = request('status');
        $anggota->no_hp = request('no_hp');
        $anggota->status_panahan = request('status_panahan');
        $anggota->jenis_panahan = request('jenis_panahan');
        $anggota->status_registrasi = request('status_registrasi');
        $anggota->keterangan = request('keterangan');
        $anggota->handleUploadBukti();
        $anggota->handleUploadFoto();
        $anggota->save();
        return back()->with('success','Anggota telah ditambahkan');
    }

    function update($anggota) {
        $anggota = AnggotaClub::find($anggota);
        $anggota->nama = request('nama');
        $anggota->id_club = request('id_club');
        $anggota->jenis_kelamin = request('jenis_kelamin');
        $anggota->alamat = request('alamat');
        $anggota->tanggal_lahir = request('tanggal_lahir');
        $anggota->status = request('status');
        $anggota->no_hp = request('no_hp');
        $anggota->status_panahan = request('status_panahan');
        $anggota->jenis_panahan = request('jenis_panahan');
        $anggota->status_registrasi = request('status_registrasi');
        $anggota->keterangan = request('keterangan');
        $anggota->handleUploadBukti();
        $anggota->handleUploadFoto();
        $anggota->save();
        return back()->with('warning','Berhasil di Ubah');
    }

    function destroy($anggota) {
        $anggota = AnggotaClub::find($anggota);
        $anggota->handleDelete();
        $anggota->handleDeleteBukti();
        $anggota->delete();
        return back()->with('danger','Berhasil Dihapus');
    }
}
