<?php

namespace App\Http\Controllers\Depan\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\MasterData\Club;
use App\Models\Pendaftar;

class EventwebController extends Controller
{
    function event(){
        $data['list_event'] = Event::all();
        return view('depan.informasi.event.event',$data);
    }

    function eventDetail(Event $event) {

        $club = Club::all();
        // return $event;
        return view('depan.informasi.event.event_detail',['event' => $event, 'club'=> $club]);
    }

    function tambahpendaftar() {
        $pendaftar = new Pendaftar;
        $pendaftar->nama = request('nama');
        $pendaftar->id_club = request('id_club');
        $pendaftar->no_wa = request('no_wa');
        $pendaftar->id_event = request('id_event');
        $pendaftar->handleUploadkta();
        $pendaftar->save();
        return back()->with('success','admin akan mengirim verifikasi melalui whats App');
    }
}
