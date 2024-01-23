<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    //protected $table = 'movies';

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function rolesPeople(): HasMany
    {
        return $this->hasMany(MovieRolePeople::class, 'movie_id', 'id');
    }
}