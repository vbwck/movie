<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Director extends Model
{
    public function movies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Movie::class, 'director_id');
    }
}
