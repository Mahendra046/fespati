<?php

namespace App\Http\Controllers\Depan\Tentang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Event;

class SejarahwebController extends Controller
{
    function sejarah() {
        $data ['sejarah'] = Profil::where('jenis','sejarah')->get();
        return view('depan.tentang.sejarah_fespati',$data);
    }
}
