<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    public function jadwalRuangans(): HasMany
    {
        return $this->hasMany(JadwalRuangan::class);
    }
}
