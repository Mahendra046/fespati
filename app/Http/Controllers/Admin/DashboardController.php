<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Galeri;
use App\Models\MasterData\AnggotaClub;
use App\Models\MasterData\Club;
use App\Models\MasterData\KetuaClub;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $data ['list_berita'] = Berita::all();
        $data ['list_event'] = Event::all();
        $data ['list_galeri'] = Galeri::all();
        $data ['list_anggota'] = AnggotaClub::all();
        $data ['list_club'] = Club::all();

        return view('admin.dashboard.index',$data);
    }

    function dashboardKetua() {
        $user = Auth::guard('ketua')->id();
        $ketua = KetuaClub::with('Club')->find($user);
        $club = $ketua->club->id;
        $anggota = Club::with('ketua_club','anggota_club')->find($club);
        // return $anggota;
        return view('ketua.dashboard.index', ['anggota' => $anggota]);
    }

    function profil() {
        $data['profil'] = Auth::guard()->user();
        return view('ketua.profll',$data);
    }
}
