<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\ModelAuthenticate;
use App\Models\MasterData\Club;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class KetuaClub extends ModelAuthenticate
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $table = 'ketua_club';

    function Club()
    {
        return $this->belongsTo(Club::class, 'id', 'id_ketua');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/ketua_club";
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

    
}
