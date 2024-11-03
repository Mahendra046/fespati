<?php

namespace App\Http\Controllers\Admin\Konten;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use App\Models\Menu;
use Illuminate\Http\Request;

class TeksController extends Controller
{
    
    public function index()
    {
        $menu = Menu::where('level','1')->get();
        $teks = Konten::where('jenis_file','teks')->get();
        return view('admin.konten.teks.index',compact('teks','menu'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $konten = new Konten;
        $konten->id_menu = $request->id_menu;
        $konten->judul = $request->judul;
        $konten->tanggal = $request->tanggal;
        $konten->deskripsi = $request->deskripsi;
        $konten->jenis_file = 'teks';
        $konten->deskripsi = $request->deskripsi;
        $konten->save();
        return back()->with('success','konten berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $konten = Konten::find($id);
        $konten->id_menu = $request->id_menu;
        $konten->judul = $request->judul;
        $konten->tanggal = $request->tanggal;
        $konten->deskripsi = $request->deskripsi;
        $konten->jenis_file = 'teks';
        $konten->deskripsi = $request->deskripsi;
        $konten->save();
        return back()->with('success','konten berhasil ditambahkan');
    }

    public function destroy(string $id)
    {
        $konten = Konten::find($id);
        $konten->delete();
        return back()->with('success','konten telah dihapus');
    }
}
