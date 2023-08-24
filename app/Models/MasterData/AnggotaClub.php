<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\MasterData\Club;
use Illuminate\Support\Str;

class AnggotaClub extends Model
{
    use HasFactory;

    protected $table = 'anggota_club';

    function club() {
        return $this->belongsTo(Club::class,'id_club');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/anggota_club";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadBukti()
    {
        $this->handleDeleteBukti();
        if (request()->hasFile('bukti_pendaftaran')) {
            $bukti_pendaftaran = request()->file('bukti_pendaftaran');
            $destination = "images/anggota_club/bukti";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $bukti_pendaftaran->extension();
            $url = $bukti_pendaftaran->storeAs($destination, $filename);
            $this->bukti_pendaftaran = "app/" . $url;
            $this->save();
        }
    }
    function handleDeleteBukti()
    {
        $bukti_pendaftaran = $this->bukti_pendaftaran;
        if ($bukti_pendaftaran) {
            $path = public_path($bukti_pendaftaran);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
