<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voiceover extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'voice_id'];
    public function voice(): BelongsTo
    {
        return $this->belongsTo(Voice::class);
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'voice' => $this->voice,
        ];
    }
}
