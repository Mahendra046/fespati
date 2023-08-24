<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    function index(Galeri $galeri){
        $data['list_galeri'] = $galeri->all();
        return view('admin.galeri.index',$data);
    }

    function store(){
        $galeri = new Galeri;
        $galeri->handleUploadFoto();
        $galeri->save();
        return back()->with('success','Foto Berhasil diTambahkan');
    }

    function update(Galeri $galeri){

    }

    function destroy(Galeri $galeri){
        $galeri->handleDelete();
        $galeri->delete();

        return back()->with('danger','Foto Berhasil diHapus');
    }
}
