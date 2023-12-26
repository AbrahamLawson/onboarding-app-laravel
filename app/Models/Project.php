<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = ['title', 'description'];
    use HasFactory;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
			'description' => $this->description,
        ];
    }
	public function params(): HasMany{
		return $this->hasMany(Param::class);
	}
}
