<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table ="menu";

    // Relasi ke submenus (menu->submenus)
    public function submenus()
    {
        return $this->hasMany(Menu::class, 'id_induk');
    }

    // Relasi ke menu induk (submenu->menu)
    public function induk()
    {
        return $this->belongsTo(Menu::class, 'id_induk');
    }

    // Relasi ke konten
    public function konten()
    {
        return $this->hasMany(Konten::class, 'id_menu');
    }

    
}
