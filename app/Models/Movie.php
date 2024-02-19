<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['movie_id','movie_title','release_year','movie_info','movie_duration','movie_price','movie_alut','image_path'];
    protected $primaryKey = 'movie_id';

    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }
}
