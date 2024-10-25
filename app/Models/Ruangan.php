<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    public function jadwalRuangans(): HasMany
    {
        return $this->hasMany(JadwalRuangan::class);
    }

    use HasFactory;

    protected $fillable = [
        'nama_ruangan',
        'kapasitas',
        'tipe_ruangan',
        'tersedia',
        'fasilitas',
        'gambar',
    ];
}
