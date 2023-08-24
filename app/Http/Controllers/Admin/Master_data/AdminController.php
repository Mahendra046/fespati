<?php

namespace App\Http\Controllers\Admin\Master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index',$data);
    }
    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $massage = [
            'required' => ':attribute Wajib diIsi'
        ];
        $this->validate($request, $rules, $massage);

        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->level = request('level');
        $admin->no_hp = request('no_hp');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        return back()->with('success','admin Berhasil Ditambahkan');
    }

    function update(Admin $admin) {

        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->level = request('level');
        $admin->no_hp = request('no_hp');
        $admin->save();
        return back()->with('warning','Data Berhasil diEdit');
    }

    function destroy(Admin $admin){
        return $admin;
    }
}
