<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    protected $fillable = ['title', 'poster', 'genre', 'country', 'year', 'rating'];
    protected $movies = [
        [
            'no' => 1,
            'title' => 'Date A Live Movie: Mayuri Judgment',
            'poster' => 'image.png',
            'genre' => 'Action',
            'country' => 'Japan',
            'year' => 2015,
            'rating' => 7.3,
        ],
        [
            'no' => 2,
            'title' => 'Your Name.',
            'poster' => 'image.png',
            'genre' => 'Romance',
            'country' => 'Japan',
            'year' => 2016,
            'rating' => 8.8,
        ],
        [
            'no' => 3,
            'title' => 'A Silent Voice',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'country' => 'Japan',
            'year' => 2017,
            'rating' => 8.9,
        ],
        [
            'no' => 4,
            'title' => 'Tenki no Ko',
            'poster' => 'image.png',
            'genre' => 'Fantasy',
            'country' => 'Japan',
            'year' => 2019,
            'rating' => 8.3,
        ],
        [
            'no' => 5,
            'title' => 'Laid-Back Camp Movie',
            'poster' => 'image.png',
            'genre' => 'Comedy',
            'country' => 'Japan',
            'year' => 2022,
            'rating' => 8.5,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}


