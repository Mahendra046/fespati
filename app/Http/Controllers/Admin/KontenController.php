<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konten;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KontenController extends Controller
{
    public function index()
    {
        $kontens = Konten::with('menu')->get(); // Mengambil semua konten beserta data menu
        return view('konten.index', compact('kontens'));
    }

    public function create()
    {
        $menus = Menu::all(); // Mengambil semua menu untuk dropdown pilihan
        return view('konten.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $validator = Konten::validate($request->all()); // Validasi data
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $konten = new Konten($request->except('file')); // Buat instance Konten tanpa file
        $konten->save(); // Simpan untuk mendapatkan ID sebelum handle upload

        // Tangani upload file
        $konten->handleUploadFile();

        return redirect()->route('konten.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function show(Konten $konten)
    {
        return view('konten.show', compact('konten')); // Menampilkan detail konten
    }

    public function edit(Konten $konten)
    {
        $menus = Menu::all(); // Mengambil semua menu untuk dropdown pilihan
        return view('konten.edit', compact('konten', 'menus'));
    }

    public function update(Request $request, Konten $konten)
    {
        $validator = Konten::validate($request->all()); // Validasi data
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update data kecuali file
        $konten->update($request->except('file'));

        // Tangani upload file jika ada
        if ($request->hasFile('file')) {
            $konten->handleUploadFile();
        }

        return redirect()->route('konten.index')->with('success', 'Konten berhasil diperbarui');
    }

    public function destroy(Konten $konten)
    {
        if ($konten->file) {
            Storage::delete($konten->file); // Hapus file jika ada
        }
        $konten->delete(); // Menghapus data
        return redirect()->route('konten.index')->with('success', 'Konten berhasil dihapus');
    }
}
