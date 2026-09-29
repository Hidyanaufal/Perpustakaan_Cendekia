<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    protected $fillable = [
        'nama',
        'username',
        'password',
    ];

    public function peminjamans(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
}