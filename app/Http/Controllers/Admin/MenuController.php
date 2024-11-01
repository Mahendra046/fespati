<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('level','0')->get(); // Mengambil semua menu dengan submenunya
        return view('admin.menu.menu-induk.index', compact('menus'));
    }

    public function store()
    {
        // Buat menu baru
        $menu = new Menu;
        $menu->level = Request('level');
        $menu->judul = Request('judul');
        $menu->url = Request('url');
        $menu->id_induk = Request('id_induk');
// return $menu;
        // Simpan menu ke database
        $menu->save();

        return back()->with('success','data menu telah ditambahkan');
    }

    public function update(Menu $menu)
    {
        $menu->judul = Request('judul');
        $menu->url = Request('url');
        return $menu;
        return back()->with('success','menu berhasiil diperbarui');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete(); // Menghapus data
        return back()->with('success', 'Menu berhasil dihapus');
    }
}
