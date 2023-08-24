<?php

namespace App\Http\Controllers\Depan\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class FotowebController extends Controller
{
    function galeri(){
        $data['list_galeri'] = Galeri::all();
        return view('depan.media.foto',$data);
    }
}
