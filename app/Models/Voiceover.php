<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Voiceover extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'voice_id'];
    public function voice(): HasOne
    {
        return $this->hasOne(Voiceover::class);
    }

}
