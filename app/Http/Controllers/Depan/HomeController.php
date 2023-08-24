<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data['recent_berita'] = Berita::orderBy('id','DESC')->take(3)->get();
        $data['list_event'] = Event::all();
        return view('depan.home.home', $data);
    }

    function galeri(){
        $data['list_galeri'] = Galeri::all();
        return view('depan.media.foto',$data);
    }

    function berita(){
        $data['list_berita'] = Berita::orderBy('id','DESC')->take(6)->get();
        return view('depan.berita.berita',$data);
    }
}
