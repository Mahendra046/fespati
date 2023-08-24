<?php

namespace App\Models;

use App\Models\Model;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
class Admin extends ModelAuthenticate
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    protected $table = 'admin';

    protected $fillable = ['nama', 'email', 'password'];
}
