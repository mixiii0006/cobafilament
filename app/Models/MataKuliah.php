<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MataKuliah extends Model
{
    public function dosen(): BelongsToMany
    {
        return $this->belongsToMany(Dosen::class, 'pemetaans');
    }
}
