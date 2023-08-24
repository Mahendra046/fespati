<?php

namespace App\Http\Controllers\Admin\Master_data;

use App\Http\Controllers\Controller;
use App\Models\MasterData\AnggotaClub;
use App\Models\MasterData\KetuaClub;
use Illuminate\Http\Request;
use App\Models\MasterData\Club;

class KetuaController extends Controller
{
    function index()
    {
        $data['list_ketua'] = KetuaClub::all();
        return view('admin.club.ketua.index', $data);
    }

    function store()
    {
        $ketua = new KetuaClub;
        $ketua->nama = request('nama');
        $ketua->email = request('email');
        $ketua->password = bcrypt(request('password'));
        $ketua->handleUploadFoto();
        $ketua->save();
        return back()->with('success', 'Ketua Berhasil Ditambahkan');
    }

    function update(KetuaClub $ketua)
    {
        $ketua->nama = request('nama');
        $ketua->email = request('email');
        if (request('foto')) $ketua->handleUploadFoto();
        $ketua->save();
        return back()->with('warning', 'Data Telah diPerbarui');
    }

    function destroy($ketua)
    {
        $ketua = KetuaClub::find($ketua);
        $ketua->handleDelete();
        $ketua->delete();

        return back()->with('danger','Haudah Terapus');
    }
}
