<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    function index(Berita $berita) {
        $data ['list_berita'] = $berita->all();
        return view('admin.berita.index',$data);
    }

    function store() {
        $berita = new Berita;
        $berita->judul = request('judul');
        $berita->isi = request('isi');
        $berita->handleUploadFoto();
        $berita->save();
        return redirect('admin/berita')->with('success','Berita berhasil ditambahkan');
    }

    function show($berita) {
        $data['berita'] = Berita::find($berita);
        return view('admin.berita.show', $data);
    }

    function update(Berita $berita){
        $berita->judul = Request('judul');
        if (request ('foto')) $berita->handleUploadFoto();
        $berita->isi = Request('isi');
        $berita->save();
        return back()->with('success','Data Berhasil diPerbarui');
    }

    function delete(Berita $berita) {
        $berita->handleDelete();
        $berita->delete();
        return redirect('admin/berita')->with('danger', 'Berita Berhasil dihapus');
    }
}
