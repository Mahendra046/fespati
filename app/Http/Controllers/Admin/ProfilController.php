<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    function index(){
        $data['list_profil'] = Profil::all();
        return view('admin.profil.index',$data);
    }

    function store(){
        $profil = new Profil;
        $profil->jenis = Request('jenis');
        $profil->isi = Request('isi');
        $profil->handleUploadFoto();
        $profil->save();
        return back()->with('success',' Data profil fespati berhasil di tambahkan');
    }

    function update(Profil $profil){
        $profil->jenis = Request('jenis');
        $profil->isi = Request('isi');
        $profil->handleUploadFoto();
        $profil->update();
        return back()->with('warning','Data Profil Fespati Berhasil di Ubah');
    }

    function destroy(Profil $profil){
        $profil->handleDelete();
        $profil->delete();
        return back()->with('danger','Data Profil Fespati berhasil di Hapus');
    }
}
