<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'favorite'
    ];

    protected $attributes = ['favorite' => false];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
