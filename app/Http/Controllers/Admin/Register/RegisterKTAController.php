<?php

namespace App\Http\Controllers\Admin\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
class RegisterKTAController extends Controller
{
    function index() {
        $data['dokumen'] = Register::all();
        return view('admin.register.registerkta', $data);
    }

    function store() {
        $dokumen = new Register;
        $dokumen->judul = request('judul');
        $dokumen->keterangan = request('keterangan');
        $dokumen->link_unduhan = request('link_unduhan');
        $dokumen->handleUploadFoto();
        $dokumen->save();
        return back()->with('success','Data Tampilan Register Telah di Tambahkan');
    }

    function update(Register $dokumen) {
        $dokumen->judul = request('judul');
        $dokumen->keterangan = request('keterangan');
        $dokumen->link_unduhan = request('link_unduhan');
        if(request('foto')) $dokumen->handleUploadFoto();
        $dokumen->save();
        return back()->with('warning','Data Tampilan Register Berhasil diUbah');
    }

    function destroy(Register $dokumen) {
        $dokumen->handleDelete();
        $dokumen->delete();
        return back()->with('danger','Data Telah DImusnahkan');
    }
}
