<?php

namespace App\Models\MasterData;

use App\Models\MasterData\KetuaClub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
class Club extends Model
{
    use HasFactory;
    protected $table = 'club';

    function ketua_club() {
        return $this->belongsTo(KetuaClub::class, 'id_ketua');
    }

    function anggota_club() {
        return $this->hasMany(AnggotaClub::class, 'id_club','id');
    }
}
