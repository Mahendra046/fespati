<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function index()
    {
        $menuinduk = Menu::where('level','0')->get();
        $menus = Menu::where('level', '1')->get();
        return view('admin.menu.menu-tambahan.index', compact('menus','menuinduk'));
    }

    public function store()
    {
        $menu = new Menu;
        $menu->level = '1';
        $menu->judul = Request('judul');
        $menu->url = Request('url');
        $menu->id_induk = Request('id_induk');
        $menu->save();

        return back()->with('success','data menu telah ditambahkan');
    }

    public function update(Menu $menu)
    {
        $menu->level = '1';
        $menu->judul = Request('judul');
        $menu->url = Request('url');
        $menu->id_induk = Request('id_induk');
        return $menu;
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete(); // Menghapus data
        return back()->with('success', 'Menu berhasil dihapus');
    }
}
