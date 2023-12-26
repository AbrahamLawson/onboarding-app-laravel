<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Param extends Model
{
    use HasFactory;
	protected $fillable = ['value', 'order', 'project_id'];
	
	public function project(): BelongsTo{
		return $this->belongsTo(Project::class);
	}
	
}
