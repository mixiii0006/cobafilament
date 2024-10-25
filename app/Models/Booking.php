<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruangan_id',
        'nama_pemesan',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'surat_permohonan',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
