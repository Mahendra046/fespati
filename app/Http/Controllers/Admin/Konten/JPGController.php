<?php

namespace App\Http\Controllers\Admin\Konten;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use App\Models\Menu;
use Illuminate\Http\Request;

class JPGController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $menu = Menu::where('level','1')->get();
       $jpg = Konten::where('jenis_file','image')->get();
       return view('admin.konten.img.index', compact('jpg','menu'));
    }

    public function store(Request $request)
    {
        $konten = new Konten;
        $konten->id_menu = $request->id_menu;
        $konten->judul = $request->judul;
        $konten->tanggal = $request->tanggal;
        $konten->deskripsi = $request->deskripsi;
        $konten->jenis_file = 'image';
        $konten->handleUploadImage();
        $konten->save();
        return back()->with('success','konten berhasil ditambahkan');
    }

    public function update(Request $request, string $id)
    {
        $konten = Konten::find($id);
        $konten->judul = $request->judul;
        $konten->tanggal = $request->tanggal;
        $konten->deskripsi = $request->deskripsi;
        $konten->jenis_file = 'image';
        $konten->handleUploadImage();
        $konten->save();
        return back()->with('success','konten berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $konten = Konten::find($id);
        $konten->handleDelete();
        $konten->delete();
        return back()->with('success','konten telah dihapus');
    }
}
