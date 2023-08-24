<?php

namespace App\Http\Controllers\Depan\Tentang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktur;

class StrukturwebController extends Controller
{
    function struktur_organisasi() {
        $data['struktur'] = Struktur::all();
        return view('depan.tentang.struktur_organisasi',$data);
    }
}
