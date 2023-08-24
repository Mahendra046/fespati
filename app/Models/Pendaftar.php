<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Support\Str;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';

    function handleUploadkta()
    {
        $this->handleDelete();
        if (request()->hasFile('kta')) {
            $kta = request()->file('kta');
            $destination = "images/galeri";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $kta->extension();
            $url = $kta->storeAs($destination, $filename);
            $this->kta = "app/" . $url;
            $this->save();
        }
    }
    function handleDelete()
    {
        $kta = $this->kta;
        if ($kta) {
            $path = public_path($kta);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
