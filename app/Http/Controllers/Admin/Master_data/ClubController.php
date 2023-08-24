<?php

namespace App\Http\Controllers\Admin\Master_data;

use App\Http\Controllers\Controller;
use App\Models\MasterData\Club;
use App\Models\MasterData\KetuaClub;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    function index() {
        $data ['list_ketua'] = KetuaClub::doesntHave('club')->get();
        $data ['list_club'] = Club::with('anggota_club')->get();
        return view('admin.club.index',$data);
    }

    function store() {
        $club = new Club;
        $club->nama_club = request('nama_club');
        $club->id_ketua = request('id_ketua');
        $club->save();
        return back()->with('success','Data Club Telah ditambahkan');
    }

    function show($club) {
        $club = Club::with('anggota_club')->find($club);
        return view('admin.club.show', ['club'=> $club]);
    }

    function destroy(Club $club) {
        $club->delete();
        return back()->with('danger','Data Berhasil Dihapus');
    }
}
