<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegistrasiwebController extends Controller
{
    function informasi() {
        $data ['register'] = Register::all();
        return view('depan.register_kta.register_kta',$data);
    }
}
