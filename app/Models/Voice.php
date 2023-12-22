<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voice extends Model
{
    use HasFactory;
    public function voiceovers(): HasMany
    {
        return $this->hasMany(Voice::class);
    }


}
