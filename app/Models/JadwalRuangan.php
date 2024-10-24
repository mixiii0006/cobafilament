<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class JadwalRuangan extends Model
{
    public function pemetaan(): BelongsTo
    {
        return $this->belongsTo(Pemetaan::class);
    }

    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }
}
