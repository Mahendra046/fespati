<?php

namespace App\Http\Controllers\Admin;

use App\Models\Struktur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    function index() {
        $data['list_struktur'] = Struktur::all();
        return view('admin.struktur.index',$data);
    }

    function store() {
        $stuktur = new Struktur;
        $stuktur->judul = Request('judul');
        $stuktur->handleUploadFoto();
        $stuktur->save();
        return back()->with('success','Data Berhasil Ditambahkan');
    }

    function update(Struktur $struktur) {
        $struktur->judul = Request('judul');
        if (request('foto'))$struktur->handleUploadFoto();
        $struktur->save();
        return back()->with('warning','Data Berhasil Diedit');
    }

    function destroy(Struktur $struktur) {
        $struktur->handleDelete();
        $struktur->delete();
        return back()->with('danger','Data Berhasil Dihapus');
    }
}
