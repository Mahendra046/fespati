<?php

namespace App\Http\Controllers\Depan\Tentang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class VisimisiwebController extends Controller
{
    function visi_misi() {
        $data['visi'] = Profil::where('jenis','visi')->get();
        $data['misi'] = Profil::where('jenis','misi')->get();
        return view('depan.tentang.visi_misi',$data);
    }
}
