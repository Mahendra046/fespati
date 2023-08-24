<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProcess(Request $request){
        $credentials = $request->only('email','password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/dashboard')->with('success','Selamat Datang AdminFes');

        }else if(Auth::guard('ketua')->attempt($credentials)) {
            return redirect('ketua/dashboard')->with('success','Login Berhasil');
        } return back()->with('danger','Login Gagal');
    }

    function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::guard('ketua')->logout();

        $request->session()->invalidate();

        return redirect('login')->with('warning','Anda Telah Keluar');
    }
}
