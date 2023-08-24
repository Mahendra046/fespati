<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\FotoEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index() {
        $data['list_event'] = Event::all();
        return view('admin.event.index', $data);
    }

    function store() {
        $event = new Event;
        $event->nama_event = Request('nama_event');
        $event->keterangan = Request('keterangan');
        $event->handleUploadFoto();
        $event->mulai = Request('mulai');
        $event->selesai = Request('selesai');
        $event->jam = Request('jam');
        $event->lokasi = Request('lokasi');
        $event->status = 'pendaftaran';
        $event->save();

        return back()->with('success','Event Berhasil diTambahkan');
    }

    function show(Event $event) {
        return view('admin.event.show',['event'=> $event]);
    }

    function update(Event $event) {
        $event->nama_event = Request('nama_event');
        $event->keterangan =Request('keterangan');
        $event->mulai =Request('mulai');
        $event->selesai =Request('selesai');
        $event->jam = Request('jam');
        $event->lokasi = Request('lokasi');
        // $event->status = 'pendaftaran';
        // return $event;
        $event->save();

        return back()->with('warning','Event Berhasil di Ubah');
    }

    function destroy(Event $event) {
        $event->handleDelete();
        $event->delete();
        return back()->with('danger','Event Telah dihapus');
    }

}
