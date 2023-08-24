<?php

namespace App\Http\Controllers\Admin\Master_data;

use App\Http\Controllers\Controller;
use App\Models\MasterData\AnggotaClub;
use App\Models\MasterData\Club;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\BackupGlobals;
use Symfony\Component\Console\Formatter\OutputFormatterStyleStack;

class AnggotaController extends Controller
{
    function index() {
        $data ['list_club'] = Club::all();
        $data ['list_anggota'] = AnggotaClub::with('club')->get();
        // return $data;
        return view('admin.club.anggota.index',$data);
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
        $anggota->handleUploadFoto();
        $anggota->status_registrasi = request('status_registrasi');
        $anggota->keterangan = request('keterangan');
        $anggota->save();
        return back()->with('success','Anggota telah ditambahkan');
    }

    function show($anggota) {
        $anggota = AnggotaClub::with('club')->find($anggota);

        // Menghitung umur anggota

        $tanggalLahir = Carbon::parse($anggota->tanggal_lahir);
        $umur = $tanggalLahir->diffInYears(Carbon::now());
        $anggota->umur = $umur;
        // return $anggota;
        return view('admin.club.anggota.show',['anggota' => $anggota]);
    }

    function update(AnggotaClub $anggota) {
        if(request('foto'))$anggota->handleUploadFoto();
        $anggota->save();
        return back()->with('warning','Data Berhasil Diubah');
    }

    function destroy($anggota) {
        $anggota = AnggotaClub::find($anggota);
        $anggota->handleDelete();
        $anggota->delete();
        return back()->with('danger','Data Telah Dihapus');
    }

    function tolak($anggota) {
        $anggota = AnggotaClub::find($anggota);
        $anggota->status_registrasi = 'Ditolak';
        $anggota->keterangan = request('keterangan');
        $anggota->save();
        return back()->with('success','Berhasil Di Tanggapi');
    }

    function terima($anggota) {
        $anggota = AnggotaClub::find($anggota);
        $anggota->status_registrasi = 'Diterima';
        $anggota->keterangan = request('keterangan');
        $anggota->save();
        return back()->with('success','Berhasil ditanggapi');
    }
}
