<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'alamat',
        'no_telp',
    ];

    public function peminjamans(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
}