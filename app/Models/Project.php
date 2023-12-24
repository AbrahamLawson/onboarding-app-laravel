<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title'];
    use HasFactory;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
